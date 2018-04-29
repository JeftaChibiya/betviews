<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /** Created: 29 Apr 2018 */
        foreach($this->getPermissions() as $permission){
            // foreach permission register a new permission instance with the laravel gate class
            $gate->define($permission->name, function($user) use ($permission) {
                // see if user has proper role for the action
                return $user->hasRole($permission->roles);
            });
        }
    }


    /** 
     *  
     *  Get all permissions
     *  
     */
    protected function getPermissions()
    {

        return Permission::with('roles')->get();

    }
}
