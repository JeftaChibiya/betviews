@extends('layouts.admin')

@section('content')

    <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
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
                <p class="subtitle is-4">Matches presentations</p>
                <small>date pagination</small>            
            </div>
        </div>
    </section>
@endsection