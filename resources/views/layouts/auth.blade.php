<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Betviews </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>      
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/regular.css" integrity="sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">  
</head>

<body style="background-color: #00d1b2; height: 100vh">

    <div id="app">
        <section class="section hero">
            <div class="hero-body">
                <div class="container">
                    
                    @yield('content')   
                </div>               
            </div>           
        </section>   
        
                <footer class="auth-footer">
                        <div class="columns is-hidden-mobile">
                            <div class="column"></div>
                            <div class="column is-5">
                                <nav class="level is-mobile">
                                    <div class="level-item">
                                        <a href="/" class="subtitle is-size-5-desktop is-size-6-mobile">
                                            <b>BetViews</b>
                                        </a>                                 
                                    </div>     
                                    <div class="level-item">
                                        <p class="subtitle is-size-6-desktop is-size-6-mobile">
                                            &copy; Copyright {{date('Y')}}.
                                        </p>
                                    </div>
                                    <div class="level-item">
                                        <p class="subtitle is-size-6-desktop is-size-6-mobile">
                                            All rights reserved.
                                        </p>
                                    </div>                                        
                                </nav>                                    
                            </div>
                            <div class="column"></div>
                        </div>                
                    </footer>          
     </div>

    <script src="{{ mix('js/app.js') }}"></script>  


</body>
</html>