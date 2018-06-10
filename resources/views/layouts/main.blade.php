<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head-content')   
</head>

    <body>

        <div id="app">
            <!-- <a href="http://ads2.williamhill.com/redirect.aspx?pid=191755894&bid=1487415873">
                <img alt="" src="http://ads2.williamhill.com/renderimage.aspx?pid=191755894&bid=1487415873" border=0 style="width: 100%"></img>
            </a>                         -->
            @include('partials.slideout-menu-right')

            <main id="panel" class="slideout-panel panel">
                @include('partials.navbar')
                @yield('content')                 
            </main> 
              
        </div>

        <br/>

        <footer class="footer"> @include('partials.footer-content') </footer>  

        <script src="{{ mix('js/app.js') }}"></script>  
        <script src="/js/stripe-form.js" async> </script>
        <script src="/js/accordion.js"></script>
        <!-- SLideout -->
        <script>
            window.Slideout;

            document.querySelector('.navbar-burger').addEventListener('click', function() {
                slideout.toggle();
            });

            function close(event) {
                event.preventDefault();
                slideout.close();
            } 

            // slideout panel - admin
            var slideout = new Slideout({
                'panel': document.getElementById('panel'),
                'menu': document.getElementById('right-side-menu'),
                'padding': 230,
                'tolerance': 70,
                'side': 'right'
            });

            slideout
                .on('beforeopen', function() {
                this.panel.classList.add('panel-open');
                })
                .on('open', function() {
                this.panel.addEventListener('click', close);
                })
                .on('beforeclose', function() {
                this.panel.classList.remove('panel-open');
                this.panel.removeEventListener('click', close);
            });           
        </script>         

    </body>
</html>