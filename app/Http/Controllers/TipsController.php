<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Tip;
use App\Stake;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    
    
    public function dummy()
    {

    	return view('dummy');
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tips = Tip::all();

    	return view('tip.index', compact('tips'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bettingTip()
    {
        //GuzzleHttp\Client
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.the-odds-api.com/']);

        $result = $client->request('GET','v2/odds/?apiKey=b1ef63d1b3614dadd6eb86b1a9b45fcb&sport=FIFA_WC_2018&region=uk',[
            'headers' => [
                'Accept'     => 'application/json',
                'Content-type' => 'application/json'                
            ]           
        ]);   
        
        // using json_decode to convert stdClass object into array
        $odds_data = json_decode((string) $result->getBody(), true);  
        
        // dd($odds_data);
        return view('tip.betting', compact('odds_data'));        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generalTip()
    {                 
        $tags = Tag::all();
        
        return view('tip.general', compact('tags'));        

    }    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            // create new tip
            $tip = new Tip;

            $tip->intro = $request->input('tip_intro');
            $tip->sub_intro = $request->input('sub_intro');            
            $tip->tip_body = $request->input('tip_body');

            if($request->hasFile('cover_image'))
            {
                $cover_image = $request->file('cover_image');
                // name = current time + original file name
                $filename = time() . '_' . $cover_image->getClientOriginalname();
                // save file in database as just the original file name 
                $tip->cover_image = $filename;
                // save, store file
                $cover_image->storeAs('/tips/cover_images', $filename, 'uploads');			            
            }

            $tip->save();

            $tags = json_decode($request->get('tags'));

            foreach($tags as $tag){
                $tip->tags()->attach($tag->id);                
            }

            if($request->input('bet_market'))
            {
                // create new stake
                $stake = new Stake();
                
                $stake->bet_market = $request->input('bet_market');
                $stake->bookmaker = $request->input('bookmaker');            
                $stake->odds = $request->input('odds');
                $stake->stake_analysis = $request->input('stake_analysis');            

                $tip->stakes()->save($stake);                
            }

            return ['redirect' => route('tip.index', [$tip])];    

      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
	{
        
        $tip = Tip::find($id);
        
        $url = request()->fullUrl();

		return view('tip.show', compact('tip', 'url'));

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


    // $tip->match_title = $request->input('match_title');
    // $tip->match_time = $request->input('match_time'); 
    // $tip->side_one = $request->input('side_one');    
    // $tip->side_two = $request->input('side_two'); 
}
