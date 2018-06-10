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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tips()
    {
        
        return view('tip.index');          

    }


    /**
     * Manage Users
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
            
        return view('admin.users');    
   
    }    
   
  

}
