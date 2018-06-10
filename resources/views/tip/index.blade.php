@extends('layouts.admin')

@section('content')

    <!-- tip.create -->
    <section class="section">
        <div class="container">
            <div class="columns">
                <a class="column notification" href="tip.general-tip">
                    General tip
                    <p class="subtitle is-5">Tip without stakes included</p>
                </a>
                <a class="column notification" href="tip.betting-tip">
                    Betting tip
                    <p class="subtitle is-5">Tip with stakes included</p>                
                </a>
            </div>            
        </div>
    </section>

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <p class="subtitle is-4">Matches presentations</p>
                <small>date pagination</small>    
                
                <p class="subtitle is-4">Recent Tips</p>
                <!-- category products -->                           
                <div class="products-show">
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
    </section>
@endsection