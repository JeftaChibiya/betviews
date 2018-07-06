<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{   
    protected $fillable = ['name'];

    public function tips()
    {
        
        return $this->belongsToMany(Tip::class);

    }  
    
    public function getRouteKeyName()
    {
        
        return 'name';

    }      
}
