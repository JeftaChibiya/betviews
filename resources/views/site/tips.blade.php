@extends('layouts.main')
@section('title', 'Tips')

@section('content')
    <div class="container">
        <div class="margin-down margin-up">
            <p class="title is-size-2-desktop is-size-4-mobile has-text-centered">
                <b>Recently Uploaded</b>
            </p>                       
        </div> 
        <div class="margin-down">
            <p class="subtitle is-size-5-desktop is-size-6-mobile has-text-centered">
                Wondering what's new on Betviews. The following posts have been recently uploaded
            </p>              
        </div>   

        <br/>

        @foreach($tips->chunk(4) as $set)
        <div class="tile is-ancestor">
        @foreach($set as $tip)
            <div class="tile is-parent">
                <a class="tile is-child box" href="/tip.show/{{ $tip->id }}">
                        <div class="tip-banner">
                            <figure>
                                <img src="/images/uploads/tips/cover_images/{{ $tip->cover_image }}" style="width: 100%" alt="" />
                            </figure>
                        </div>                 
                <div class="content">                 
                    <div>
                        <div class="columns">
                            <div class="column">
                                {{ $tip->intro }}
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
                                <b>Betviews</b>
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

        
        <div class="margin-down">
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <div class="tile is-child box">
                    <p class="title is-4">Most recent</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                    <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                    <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                    </div>
                </div>                
                <div class="tile is-6 is-vertical is-parent">
                    <div class="tile is-child box">
                    <p class="title is-4">2nd</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                    <div class="tile is-child box">
                    <p class="title is-4">3rd</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </div>
            </div>    
        </div>        
    </div>
@endsection