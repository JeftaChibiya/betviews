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
        'intro',  
        'sub_intro',         
        'tip_body',            
        'match_title', 
        'cover_image', 
        'match_date', 
        'match_time',
        'side_one',
        'side_two'
    ];  

    protected $dates =[
        'match_time'
    ];
    
    

    public function stakes()
    {
        
        return $this->belongsToMany('App\Stake')->withTimestamps();

    } 

    public function tags()
    {
        
        return $this->belongsToMany(Tag::class);

    }     
       
}
