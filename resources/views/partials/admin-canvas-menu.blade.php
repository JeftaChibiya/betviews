<nav class="level is-mobile">
    <div class="level-left">
        <div class="level-item">
            <div>
                <p class="title is-5 toggle-button" id="toggle-left">
                <span class="icon">
                    <i class="fa fa-bars"></i>
                </span>                    
                    MENU
                </p>
            </div>
        </div>    
    </div>

    <div class="level-right">       
        <div class="level-item">
            @if(Auth::user())
                <a class="second-toggle">
                    <strong>{{ ucfirst(Auth::user()->username) }}</strong>
                </a>                                                               
            @endif 
        </div>

        <div class="level-item">
            <a class="second-toggle">
                <i class="far fa-envelope"></i>
            </a>                                                               
        </div>         

        <div class="level-item">
            <p class="subtitle" style="color: #ddd">|</p>
        </div>

        <div class="level-item">
            <a href="{{ url('/logout') }}" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sign out
            </a> 
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form> 
        </div>     
    </div>
</nav> 