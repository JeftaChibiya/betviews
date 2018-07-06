@extends('layouts.main')
@section('title', 'Tips')

@section('content')
    <div class="container">
        <div class="section">
            <div class="original notice default-clear">
                <div class="container">
                    <div class="columns">
                        <div class="column"></div>
                        <div class="column is-11">                  
                            <div class="margin-20">
                                <p class="title is-7">STEP <b>1</b> OF <b>3</b></p>                         
                                <p class="title is-5"><b>Choose a plan that suits you.</b></p>                              
                            </div>	

                            <br/>

                          <!-- Plan listing -->
                           <div class="tile is-ancestor">
                            @foreach($plans as $plan)
                                <div class="tile is-parent">
                                    <div class="tile is-child box">
                                        <div class="level">
                                            <div class="level-left">
                                                <div class="level-item">
                                                    <p class="title is-5"> {{ $plan->name }} </p>                                                 
                                                </div>
                                                <div class="level-item">
                                                    <p class="subtitle is-7"> | </p> 
                                                </div>
                                                <div class="level-item">
                                                    £ {{ $plan->cost }}                                              
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <p class="subtitle is-6">
                                            {{ $plan->description }} @if($plan->slug == 'monthly') {{ $ends_at->format('d F Y') }} @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach                            
                           </div> 

                        </div>
                        <div class="column"></div>
                    </div>              
                </div>
            </div>   
    </div>
@endsection