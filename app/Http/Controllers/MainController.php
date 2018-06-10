<?php

namespace App\Http\Controllers;

use App\Tip;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class MainController extends Controller
{

    /** 
     * 
     *  Home page
     * 
     */
    public function index()
    {    	                
             
    	return view('site.index');

    } 


    /** 
     * 
     *  Support page
     * 
     */
    public function support()
    {    	                    

    	return view('site.support');

    }     

    
    /** 
     * 
     *  Tips page
     * 
     */
    public function tips()
    {    	                
        $tips = Tip::with('stakes')->get();

    	return view('site.tips', compact('tips'));

    }     


    /** 
     * 
     *  Test page
     * 
     */
    public function test()
    {    	        

        $Olduser = User::find(48);

        $Olduser->newSubscription('monthly', 'monthly')->create($data['stripeToken']);         
        
        // $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.the-odds-api.com/']); //GuzzleHttp\Client

        // https://api.the-odds-api.com/v2/odds/?apiKey=06a522e6203aa4bdb72d1a604b20923d&sport=UPCOMING&region=uk

        // $result = $client->request('GET','v2/odds/?apiKey=06a522e6203aa4bdb72d1a604b20923d&sport=EPL&region=uk',[
        //     'headers' => [
        //         'Accept'     => 'application/json',
        //         'Content-type' => 'application/json'                
        //     ]           
        // ]);   
             
    	// dd(json_decode((string) $result->getBody(), true));

    }     
      
}
