@extends('layouts.main')
@section('title', 'Home')

@section('content')
 
 <section class="hero is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                {{ ucfirst(Auth::user()->name) }}
            </h1>
            <p>{{ $user->email }} </p>
            <small>Member since: <i> {{ $user->created_at }} </i></small>        
        </div>
    </div>    
 </section>
<br/>
<div class="container">
    <div class="columns">
        <div class="column">
            @if(! $user->confirmed)                        
                <p class="subtitle has-text-centered is-4">
                    You must first confirm your email address                        
                </p>  
            @endif                               
        </div>
    </div> 

    <div class="columns">
        <div class="column is-4">
          <p class="subtitle">Subscriptions</p>
        
                <div class="notification is-light">
                @isset($days_remaining)                
                    <p class="subtitle is-6">
                        <b>{{ $days_remaining }} days of trial</b>
                    </p>
                    <p class="subtitle is-6">
                        <b><i>Ends:</i></b> <i>{{ $user->trial_ends_at->format('D d, M, Y') }}</i> 
                    </p>            
                @endisset    

                @empty($days_remaining)
                    <p class="subtitle is-6">
                        <i>Not subscribed to any service</i>                
                    </p>
                @endempty

                </div>              
        </div>
    </div>

    <!-- Subscription type: Free, ends 1 May 2018 -->

    <br/><br/>  

    <div class="columns">           
        <div class="column">
            <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile is-child box">
                <p class="title">Recent Activity</p>
                    <p>20 bets placed to date</p>
                </div>
            </div>
            </div>                
        </div>
    </div>        
</div>
    
@endsection