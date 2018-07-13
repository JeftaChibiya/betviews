@extends('layouts.main')
@section('title', 'Tips')

@section('content')
<tips-display inline-template>
<div class="container">
        <div class="margin-down margin-up">
            <p class="title is-size-2-desktop is-size-4-mobile has-text-centered">
                <b>Recently Uploaded</b>
            </p>                       
        </div>     


        <tabs>
            @foreach($tags as $tag)
                <tab name="{{ strtoupper($tag->name) }}">
                @foreach($tag->tips->chunk(3) as $set)
                <div class="tile is-ancestor">
                    @foreach($set as $tip)
                        <div class="tile is-parent {{ $loop->count == 1 ? 'is-4' : ''}}">
                            <a class="tile is-child box" href="/tip.show/{{ $tip->id }}">
                                <div class="tip-banner bg_cover" style="background-image: url('/images/uploads/tips/cover_images/{{ $tip->cover_image }}')">
                                    <!-- wavy divider -->                                                    
                                    <svg id="curve" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.9 32.1">
                                        <title>curve-background</title>
                                        <path class="cls-1" d="M.08,268.12a494.66,494.66,0,0,1,56,4.06C78.79,275.13,90.17,278,124,283.84c0,0,28.21,4.87,56,8.77S248,300.53,300.9,300.2L0,300.1c0-4.33.07-9.69.08-14.06Q.11,277,.08,268.12Z" transform="translate(0 -268.12)"/>
                                    </svg>                  
                                </div>                                    

                            <div class="content">                                        
                                <div>

                                    <div class="columns">
                                        <div class="column">
                                            <p class="subtitle is-4">
                                            {{ $tip->intro }}                                            
                                            </p>
                                        </div>
                                    </div> 

                                    <div class="columns">
                                        <div class="column">
                                            @isset($tip->side_one)
                                                <b>{{ $tip->side_one }}</b>
                                            @endisset
                                            @isset($tip->side_one)
                                                vs
                                            @endisset
                                            @isset($tip->side_two)
                                                <b>{{ $tip->side_two }}</b>
                                            @endisset                                
                                        </div>
                                    </div>                         
                                    
                                    <div class="columns">
                                        <div class="column">
                                            @isset($tip->stakes)
                                                @foreach($tip->stakes as $stake)
                                                    {{ $stake->bet_market }}
                                                @endforeach
                                            @endisset                                
                                        </div>
                                    </div> 

                                    <div class="columns">
                                        <div class="column">
                                            <b style="color: #A0A0A0">Betviews</b>
                                        </div>
                                        <div class="column has-text-centered">
                                            {{ $tip->created_at->diffForHumans() }}
                                        </div>                        
                                    </div>                     
                                </div>                                       
                            </div>
                            </a>   
                        </div>   
                        @endforeach
                    </div>  
                    @endforeach   
                </tab>
            @endforeach
        </tabs>     


        <br/>

        <div class="tips-feed">
 
        </div>
    </div>
</tips-display>
@endsection