<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials.head-content')   
</head>

    <body>   

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId            : '276561306041764',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v3.0'
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>        

        <div id="app">
            @include('partials.slideout-menu-right')

            <main id="panel" class="slideout-panel panel">
                @include('partials.navbar')
                @yield('content')                 
            </main> 
              
        </div>

        <br/>

        <footer class="footer"> 
            @include('partials.footer-content') 
        </footer>  

        <script src="{{ mix('js/app.js') }}"></script> 
        
        <!-- Below is the FB js SDK. href points to Laravel Forge, default, must alter to corresponding slug or id -->
        <!-- Could use vue.js json parsing here -->
        <script>
                document.getElementById('fbShareBtn').onclick = function() {
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    href: 'http://192.241.139.145/tip.show/2',
                    hashtag: '#BetViews'
                }, function(response){});
                }        
        </script>


        <!-- Twitter js  -->
      

        <!-- Social share script -->
        <!-- <script>

            var popupSize = {
                width: 780,
                height: 550
            };

            $(document).on('click', '#social-buttons > a', function(e){

                var
                    verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                    horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

                var popup = window.open($(this).prop('href'), 'social',
                    'width='+popupSize.width+',height='+popupSize.height+
                    ',left='+verticalPos+',top='+horisontalPos+
                    ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

                if (popup) {
                    popup.focus();
                    e.preventDefault();
                }

            });
        </script>         -->

        <!-- Tip-header tip.show -->
        <script>
            $(document).scroll(function() {
                flexHeader();
            });         

            function flexHeader() {
                var y = window.scrollY;
                if (y > 10) {
                    $('.tip_header').addClass('small'); 
                    // $('.progress-container').fadeIn();  
                    // $('.progress-bar').fadeIn();                                                          
                } else if (y < 10) {
                    $('.tip_header').removeClass('small');
                    // $('.progress-container').fadeOut();  
                    // $('.progress-bar').fadeOut();                                        
                }
            }    
            // with the help of: https://codepen.io/anon/pen/qKoGvb    
        </script> 
        
        <!-- <script src="/js/stripe-form.js" async> </script> -->
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
        
        <!-- <script>
            $(document).scroll(function() {
                showProgress();
            }); 

            function showProgress() {
                var winScroll = document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var scrolled = (winScroll / height) * 100;
                document.getElementById("myBar").style.width = scrolled + "%";
            }   
        </script> -->        

        <!-- <script src="/js/paypal_button.js"></script> -->

    </body>
</html>