<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    
        'intro', 'match_title', 'cover_image', 'match_date', 'match_time'

    ];  
    
    

    public function stakes()
    {
        
        return $this->belongsToMany('App\Stake')->withTimestamps();

    } 
       
}
