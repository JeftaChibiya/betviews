<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head-content')   
</head>

<body>

    <div id="app">
        @include('partials.navbar')
        @yield('content')    
    </div>

<br/>

<footer class="footer"> @include('partials.footer-content') </footer>  


<script src="{{ mix('js/app.js') }}"></script>  

<script src="/js/stripe-form.js" async> </script>

<script src="/js/accordion.js"></script>

</body>
</html>