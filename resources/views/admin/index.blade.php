@extends('layouts.admin')
@section('title', 'Betviews Admin')

@section('content')
   
<div>
    <br/><br/>
   <div class="container">
        <div class="tile is-ancestor">
            <a class="tile is-parent" href="/tip.index">
                <div class="tile is-child box">
                <p class="title is-4">Tips</p>
                <p class="subtitle is-5">Add, edit, view, share tips</p>
                </div>
            </a>                
            <div class="tile is-6 is-vertical is-parent">
                <a class="tile is-child box">
                <p class="title is-4">Users</p>
                <p class="subtitle is-5">Add, edit, view users</p>
                </a>
                <a class="tile is-child box">
                <p class="title is-4">More...</p>
                <p class="subtitle is-5">Add, edit, view, share tips</p>
                </a>
            </div>
        </div> 
  </div>		
    
@endsection