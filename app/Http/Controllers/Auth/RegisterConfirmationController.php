<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterConfirmationController extends Controller
{
    
    public function index()
    {
        try{
            User::where('confirmation_token', request('token'))
            ->firstOrFail()
            ->confirm(); // set user account as active
        } catch(\Exception $e) {
            return redirect('user.profile')->with('flash', 
                'Unknown token'
            );
        }


        return redirect('user.profile')->with('flash', 'Your account is now confirmed');        

    }
}
