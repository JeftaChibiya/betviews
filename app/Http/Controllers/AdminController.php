<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    /**
     * Auth before all else!
     * 
     */
    public function __construct()
    {

        $this->middleware('auth');
        // $this->middleware('password.reenter', ['only' =>['users']]);

    }
    
    
    /** 
     * 
     *  Dashboard
     * 
     */
    public function index()
    {    	        

    	return view('admin.index');

    }    
  

}
