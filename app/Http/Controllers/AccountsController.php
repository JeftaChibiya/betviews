<?php

namespace App\Http\Controllers;

use Auth;
use Braintree\ClientToken;
use Illuminate\Http\Request;


class AccountsController extends Controller
{   


    public function __construct()
    {
    
        // $this->middleware('auth');

    }
  

    
    /** 20.4.2018: return profile of auth:user */
    public function profile()
    {

        $user = Auth::user();
        
        if($user->onTrial()){        
            $date = strtotime($user->trial_ends_at);
            $remaining = $date - time();
            $days_remaining = floor($remaining / 86400);              
        }     
        
        return view('user.profile', compact('user', 'days_remaining'));

    }


}
