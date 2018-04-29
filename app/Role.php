<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{   

    public function permissions()
    {
        
        return $this->belongsToMany(Permission::class);
        
    }


    // A role can grant permission
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }    

}
