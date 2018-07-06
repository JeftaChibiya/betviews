<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    
    protected $table = 'plans';

    protected $fillable = ['name', 'slug', 'braintree_plan', 'cost', 'description'];    
}
