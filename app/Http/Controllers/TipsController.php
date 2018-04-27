<?php

namespace App\Http\Controllers;

use App\Tip;
use App\Stake;
use Illuminate\Http\Request;

class TipsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	return view('tip.index');
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GuzzleHttp\Client
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.the-odds-api.com/']);

        $result = $client->request('GET','v2/odds/?apiKey=06a522e6203aa4bdb72d1a604b20923d&sport=EPL&region=uk',[
            'headers' => [
                'Accept'     => 'application/json',
                'Content-type' => 'application/json'                
            ]           
        ]);   
        
        // using json_decode to convert stdClass object into array
        // $odds_data = json_decode((string) $result->getBody(), true);      
        return view('tip.create', compact('odds_data'));        
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            $tip = new Tip;

            $tip->tip_intro = $request->input('tip_intro');
            $tip->match_title = $request->input('match_title');
            $tip->match_time = $request->input('match_time');    

            if($request->hasFile('cover_image'))
            {
                $cover_image = $request->file('cover_image');
                // name = current time + original file name
                $filename = time() . '_' . $cover_image->getClientOriginalname();
                // save file in database as just the original file name 
                $tip->cover_image = $filename;
                // save, store file
                $cover_image->storeAs('/tips/cover_images', $filename, 'public');			            
            }

            $tip->save();

            $stake = new Stake();

            $stake->stake_instance = $request->input('stake_instance');
            $stake->bet_market = $request->input('bet_market');
            $stake->stake_analysis = $request->input('stake_analysis');            

            $tip->stakes()->save($stake);

            return redirect()->route('tip.index', [$tip]);     

      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
	{
        
        $tip = new Tip;

        $tip->tip_intro = $request->input('tip_intro');
        $tip->match_title = $request->input('match_title');
        $tip->match_time = $request->input('match_time');  

		if($request->hasFile('cover_image'))
		{
			$image = $request->file('cover_image');
			// name = time + original file name
			$filename = time() . '_' . $image->getClientOriginalName();
			// store in this folder
			$image->storeAs('/categories/cover_images',  $filename, 'dropbox');
			// get old file 
			$oldCoverImg = $tip->cover_image;
			
			$tip->cover_image = $filename;

			// delete the old file from the disk
			Storage::delete($oldCoverImg);
		}
		
		$tip->save();

		return back();

	} 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
