<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Tip;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use Spatie\Dropbox\Client as DropboxClient;

class MainController extends Controller
{

    /** 
     * 
     *  Home page
     * 
     */
    public function index()
    {    	                
             
        $tips = Tip::all();
    	return view('site.index', compact('tips'));

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

        $tags = Tag::with('tips')->get();

    	return view('site.tips', compact('tags'));

    } 
    
    
    /** 
     * 
     *  Insight page
     * 
     */
    public function insight()
    {    	                
        $tags = Tag::pluck('name', 'id');

    	return view('site.insight', compact('tags'));

    }
    
    
    /** 
     * 
     *  Specials page
     * 
     */
    public function specials()
    {    	                
        // $tips = Tip::with('stakes')->orderBy('updated_at','DESC')->get();

    	return view('site.specials');

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
