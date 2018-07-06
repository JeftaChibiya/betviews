<!doctype html>
<html lang="{{ app()->getLocale() }}">

        @include('partials.auth-head-content')

<body style="height: 100vh">
    <div id="app">
        @include('partials.register-header')

        <section class="section hero">
            <div class="hero-body">
                <div class="container">                    
                    @yield('content')   
                </div>               
            </div>           
        </section>   

        @include('partials.auth-footer')        
    </div>

    <script src="{{ mix('js/app.js') }}"></script>  


</body>
</html>