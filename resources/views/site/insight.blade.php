@extends('layouts.main')
@section('title', 'Tips')

@section('content')
        <div class="container">
            <div class="margin-down margin-up">
                <p class="title is-size-2-desktop is-size-4-mobile has-text-centered">
                    <b>Betviews Insight</b>
                </p>                       
            </div>          

        @if(\Request::is('site.insight'))
        <div class="tabs">
            <ul>
                @foreach($tags as $id => $name)
                    <li class="{{ $loop->index == 0 ? 'is-active' : ''}}"><a>{{ $name }}</a></li>
                @endforeach
            </ul>
        </div> 
        @endif    

        <br/>
        
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