<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stake extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stake_instance', 'bet_market', 'stake_analysis','fb_likes'
    ];    


    /** 
     *  Many stakes belong to many tips
     */
    public function tips()
    {
        
        return $this->belongsToMany('App\Tip');

    }
        
}
