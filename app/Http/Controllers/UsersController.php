<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UsersController extends Controller
{   
       
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::all();
        
        return view('user.index', compact('users'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::get();
        return view('user.create', compact('roles'));        
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string|min:6|unique:users|',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // retrieve only the following data
        $user = User::create($request->only('username', 'email', 'password'));
    
        $roles = $request['roles']; // retrieve the roles field
        
        // check if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();            
                $user->assignRole($role_r); // Assign role to user
            }
        }        
        
        // redirect to the users.index view and display success message
        return redirect()->route('user.index')->with('flash_message','User successfully added.');   
        
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('user.show'); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $roles = Role::get(); // Role::pluck('name', 'id');
        $permissions = Permission::all('name', 'id');
    
        return view('user.edit', compact('user', 'roles', 'permissions'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required|min:1'
        ]);
    
        // Get the user
        $user = User::findOrFail($id);
    
        $input = $request->only(['name', 'email', 'password']); // retreive name + email + password
        $user->fill($input)->save();

        $roles = $request['roles']; // retreive roles

        if (isset($roles)) {        
            $user->roles()->sync($roles);  // If one or more role is selected associate user to roles          
        }        
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        
        return redirect()->route('user.index')->with('flash_message','User successfully edited.');
            
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
            
            flash()->warning('Deletion of currently logged in user is not allowed :(')->important();
            return redirect()->back();

        }
    
        if( User::findOrFail($id)->delete() ) {
            
            flash()->success('User has been deleted');

        } else {
            
            flash()->success('User not deleted');

        }
    
        return redirect()->back();        
    }


    
    /** 
     * 
     */
    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);
        return $user;
    }    

    
}
