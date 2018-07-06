<div class="container public-display">
    <nav class="level is-mobile">
        <div class="level-left">
            <p class="level-item">
                <a class="subtitle is-6" href="/site.support">
                    Support
                </a>
            </p>
        </div>
        <!-- Right side -->
        @guest
        <div class="level-right">
            <p class="level-item">
                <a class="subtitle is-6 has-text-right" href="/register">
                    Sign up
                </a>
            </p>
            <p class="level-item">
                <a class="subtitle is-6 has-text-right" href="{{ route('login') }}">
                    Login
                </a>
            </p>                                             
        </div>
        @endguest
        @auth
        <div class="level-right">
            <p class="level-item">
                <span class="dot"></span> &nbsp;            
                <a class="subtitle is-6" href="/user.profile">
                    {{ ucfirst(Auth::user()->username ) }}
                </a>
            </p> 
            <p class="level-item">/</p>
            <p class="level-item">
               <a href="{{ url('/logout') }}" 
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                  class="subtitle is-6">
                    <b>Sign out</b>
               </a> 
               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
               </form> 
            </p>                                                        
        </div>            
        @endauth

    </nav>
</div>

<nav class="navbar is-transparent">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/images/branding/3.svg"  style="width: 125px" alt="">
            </a>
            <div class="navbar-burger burger" id="sld-menu"  data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">

            <div class="navbar-end">
                <a class="navbar-item" href="/site.tips">
                    Tips
                </a>
                <a class="navbar-item" href="/site.insight">
                    Insight
                </a>
                <a class="navbar-item" href="/site.specials">
                    Specials
                </a>                
            </div>
        </div>
    </div>
</nav>