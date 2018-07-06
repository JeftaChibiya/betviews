@extends('layouts.main')
@section('title', 'Home')

@section('content')
   
    <!--  -->
    <section class="section hero is-primary is-large betviews-intro">
        <div class="container has-text-centered">          
            <p class="title lined-title is-size-2-desktop is-size-4-mobile"><b>Your Football Tips in Style</b></p>
            <p class="subtitle is_lato is-size-4-desktop is-size-6-mobile">The simplest content to consume on all devices</p>
            <br/>
            <a class="button is-rounded is_brand" href="/register">
                JOIN BETVIEWS
            </a>
        </div>       
    </section>    

    <br/><br/>
    
    <div class="container">
        <div class="margin-down">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-8">
                </div>
                <div class="column"></div>
            </div>           
        </div>
    </div>


    <div class="container">
        <div class="margin-down">
        <p class="title is-3 has-text-centered">
            <b>Upcoming</b>
        </p>            
        </div>
    </div>

    
    <div class="container">

        <div class="columns is-mobile">
            <div class="column"></div>
            <div class="column is-8">
                <nav class="level is-mobile">
                <div class="level-item has-text-centered">
                    <i class="fa fa-caret-left fa-2x"></i>                    
                </div>
                <div class="level-item has-text-centered">
                    <div class="notification is-dark">
                        <p class="heading">1 APR</p>                        
                        <p class="title is-5 is-size-5-desktop is-size-6-mobile">3 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">2 APR</p>                          
                        <p class="title is-5 is-size-5-desktop is-size-6-mobile">5 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">3 APR</p>                          
                        <p class="title is-5 is-size-5-desktop is-size-6-mobile">2 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">4 APR</p>                          
                        <p class="title is-5 is-size-5-desktop is-size-6-mobile">2 matches</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <i class="fa fa-caret-right fa-2x"></i>                    
                </div>                
                </nav>                
            </div>
            <div class="column"></div>
        </div>        

        <br/>
        <div class="columns">           
            <div class="column">
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

        <br/>

        <div class="container">
            <div class="margin-down">
            <p class="title is-3 has-text-centered">
                <b>Specials</b>
            </p>            
            </div>
        </div>  

        <div class="columns">
            <div class="column is-8 is-offset-2">

                <div class="card">
                    <div class="content">

                    <div class="columns">
                        <div class="column is-5">
                            <img src="images/features/stokevsmancity.jpg" width="100%" alt=""> 
                        </div>
                        
                        <div class="column">
                                <p class="subtitle is-5">
                                    <b>World Cup Quiz</b>               
                                </p>                                
                                <p>
                                    How much do you know about the history of the World Cup?
                                </p>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <button class="button is-medium is_brand is-rounded">START</button>
                                        </div>
                                    </div>
                                </nav>                            
                        </div>
                    </div>                         
                    </div>                    
                </div>               
            </div>
        </div> 

                    <!-- Laravel quiz structure example: http://quizbucket.org/laravel-quiz-questions -->
            <!-- Quiz structure example: https://toptests.co.uk/ -->
        
        <br/> <br/>
              
    </div>
    
@endsection