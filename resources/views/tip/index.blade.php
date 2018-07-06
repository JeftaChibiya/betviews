@extends('layouts.admin')

@section('content')

    <br/>
    <!-- tip.create -->
    <div class="container">    
      <div class="tile is-ancestor">
       <div class="tile is-parent">
            <a class="tile is-child box" href="/tip.general-tip">
                <p class="title">General tip</p>
                <div class="content">                    
                    <p class="subtitle is-5">Tip without stakes included</p>                    
                </div>
            </a>
        </div>
        <div class="tile is-parent is-6">
            <a class="tile is-child box" href="/tip.betting-tip">
                <p class="title"> Betting tip</p>
                <div class="content">
                    <p class="subtitle is-5">Tip with stakes included</p>
                </div>
            </a>
        </div>
        </div>                   
    </div>

    <!-- preview and upcoming -->
    <!-- <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <p class="subtitle is-4">Matches presentations</p>
                <small>date pagination</small>               
                
                <p class="subtitle is-4">Recent Tips</p>
                <!-- category products -->                           
                <!-- <div class="products-show">
                    <div id="mygallery">
                        <div>
                            <img src="https://picsum.photos/" alt="">
                        </div>
                        <div>
                            <img src="https://picsum.photos/" alt="">
                        </div>
                        <div>
                            <img src="https://picsum.photos/" alt="">
                        </div>                                                
                    </div>        
                </div>
                @empty($category->products)
                    <p></p>
                @endempty  

                <small>See more...</small>                
            </div>
        </div>
    </section> -->
@endsection