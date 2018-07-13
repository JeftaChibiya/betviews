@extends('layouts.admin')
@section('title', 'Betviews Admin')

@section('content')
   
<div>
    <br/><br/>
   <!-- Admin pages -->
   <div class="container">
    <section class="section is_display">
        <div class="tile is-ancestor">
            <a class="tile is-parent" href="/tip.index">
                <div class="tile is-child box">
                <p class="title is-4" style="align-self: center">Tips & Insight</p>
                <p class="subtitle is-5" style="align-self: flex-end">Add, edit, view, share tips</p>
                </div>
            </a>                
            <div class="tile is-vertical is-parent">
                <a class="tile is-child box" href="/quiz">
                    <p class="title is-4" style="align-self: center">Quizzes & Specials</p>
                    <p class="subtitle is-5" style="align-self: flex-end">Test visitors' knowledge of the game</p>
                </a>            
                <a class="tile is-child box" href="{{ route('user.index') }}">
                    <p class="title is-4" style="align-self: center">Users</p>
                    <p class="subtitle is-5" style="align-self: flex-end">Add, edit, view users</p>
                </a>
            </div>
        </div>    
    </section>
  </div>

  <br/>
  <br/>
  
  <p class="title is-3 has-text-centered">Notifications</p>

  <!-- Notifications -->
   <div class="container admin_notifications">
       <div class="columns">
           <div class="column"></div>
           <div class="column is-8">
                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <div class="margin-10">
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <p class="title is-5">Braintree</p>                                             
                                        </div>
                                        <div class="level-item">
                                            <small>30 minutes ago</small>
                                        </div>
                                    </div>                               
                                </nav>                                 
                            </div>   

                            <p class="subtitle is-5">New Customer created and subscribed to
                                the £4.99/monthly after free month</p>                                                                                                  
                        </div>
                        <div class="tile is-child is-1 centered">
                            <a href="" class="delete is-large"></a>  
                        </div>
                    </div>                
                </div> 
                    
                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <div class="margin-10">
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <p class="title is-5">PayPal</p>                                             
                                        </div>
                                        <div class="level-item">
                                            <small>3 days ago</small>
                                        </div>
                                    </div>                                  
                                </nav>                                 
                            </div>   

                            <p class="subtitle is-5">New Customer created and subscribed to
                                the £4.99/monthly after free month</p>                                                                                                  
                        </div>

                        <div class="tile is-child is-1 centered">
                            <a href="" class="delete is-large"></a>   
                        </div>                        
                    </div>                
                </div>               
           </div>
           <div class="column"></div>
       </div>           
   </div>  
    
@endsection