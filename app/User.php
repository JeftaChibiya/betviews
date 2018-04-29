<?php

namespace App;

use Laravel\Cashier\Billable;
use Illuminate\Auth\Events\Registered;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Billable;
    
    
    protected $casts = [
        'confirmed' => 'boolean'
    ];

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'confirmation_token', 'trial_ends_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /** 
     *  Created: 25 Apr 2018 
     *  On email confirmation, nullify the confirmation_token field
     */
    public function confirm()
    {

        $this->confirmed = true;
        $this->confirmation_token = null;
        $this->save();

    }

    /** 
     *  Show what roles a user has
     *  .e.g. want to assign role of editor to user
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }    


    public function assignRole($role)
    {

        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );

    }       


    /**     
     *  Created: 29.4.18
     *  i.e. user has role of editor: $user->hasRole('editor')
     */
    public function hasRole($role)
    {
        
        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }
        
        // remove any items from the '$role' collection that are not available
        return $role->intersect($this->roles);

    }      


}
