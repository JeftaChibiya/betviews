@extends('layouts.main')
@section('title', 'Home')

@section('content')
   
    <!--  -->
    <section class="section hero is-primary is-large">
        <div class="container has-text-centered">          
            <p class="title is-2 lined-title"><b>Your Football Tips in Style</b></p>
            <p class="subtitle is-4">The simplest content to consume on all devices</p>
        </div>
    </section>

    <br/><br/>

    <div class="container">
        <p class="title is-3 has-text-centered">
            <b>Upcoming</b>
        </p>
    </div>
    
    <br/>
    <!--  -->    
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <p class="subtitle is-4">
                    Tips on <b>Stoke v Man City, Sat 3pm</b>                   
                </p>

                <article class="columns">
                    <figure class="column is-5">
                        <img src="images/features/stokevsmancity.jpg" alt=""> 
                    </figure>
                    <div class="column">
                        <div class="content">
                            <p>
                                Man City should find it easy to beat 
                                Stoke City, who are so close to the 
                                bottom of the table.
                            </p>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <a class="level-item">
                                        Stake 1
                                    </a>
                                    <a class="level-item">
                                        Stake 2
                                    </a>
                                    <a class="level-item">
                                        Stake 3
                                    </a>
                                </div>
                            </nav>                            
                        </div>
                    </div>
                 </article>                
            </div>

            <div class="column">

              <div class="accordion js-accordion">
                <div class="accordion__item js-accordion-item active">                
                    <div class="accordion-header js-accordion-header">Free bets</div> 
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <ul>
                                    <li>
                                        £10 Welcome Bonus: <b>Betfair</b>                                        
                                    </li>
                                    <li>
                                        £10 Welcome Bonus: <b>BetVictor</b>                                         
                                    </li>
                                    <li>
                                        £10 Welcome Bonus: <b>bet365</b>                                         
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div><!-- end of accordion item -->

                <div class="accordion__item js-accordion-item">
                  <div class="accordion-header js-accordion-header">Special offers</div> 
                    <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            ...
                        </div>
                    </div><!-- end of accordion body -->
                 </div><!-- end of accordion item -->

                    <div class="accordion__item js-accordion-item">
                    <div class="accordion-header js-accordion-header">Casino offers</div> 
                      <div class="accordion-body js-accordion-body">
                        <div class="accordion-body__contents">
                            ...
                        </div>
                       </div><!-- end of accordion body -->
                    </div><!-- end of accordion item -->
                    </div>
    
            </div>
        </div>  

        <br/><br/>
        
        <p class="title is-4">More of our latest tips</p> 
        <div class="columns">           
            <div class="column">
              <div class="tile is-ancestor">
                <div class="tile is-4 is-vertical is-parent">
                    <div class="tile is-child box">
                        <p class="title">Stoke vs Everton</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        <br/>
                        <small>Published: <i>21 Mar 2018</i></small>
                    </div>
                    <div class="tile is-child box">
                        <p class="title">Bournemouth vs Spurs</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        <br/>
                        <small>Published: <i>21 Mar 2018</i></small>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child box">
                    <p class="title">Arsenal vs Watford</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                        <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                        <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                        <br/>
                        <small>Published: <i>21 Mar 2018</i></small>
                    </div>
                </div>
                </div>                
            </div>
        </div>

        <div class="columns is-mobile">
            <div class="column"></div>
            <div class="column is-8">
                <nav class="level">
                <div class="level-item">
                    <i class="fa fa-caret-left fa-2x"></i>                    
                </div>
                <div class="level-item has-text-centered">
                    <div class="notification is-dark">
                        <p class="heading">1 APR</p>                        
                        <p class="title is-5">3 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">2 APR</p>                          
                        <p class="title is-5">5 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">3 APR</p>                          
                        <p class="title is-5">2 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">4 APR</p>                          
                        <p class="title is-5">2 matches</p>
                    </div>
                </div>
                <div class="level-item">
                    <i class="fa fa-caret-right fa-2x"></i>                    
                </div>                
                </nav>                
            </div>
            <div class="column"></div>
        </div>
    </div>
    
@endsection