<nav id="menu" class="slideout-menu original">
    <header>
        <div class="menu-brand">
            <a href="/admin">
                <img src="/images/branding/3.svg" alt="logo" style="width: 94px; height: auto">                
            </a>
        </div>                    
    </header>
    <br/>

    <ul>
        <li><a href="/" class="navbar-item">Go to public Site</a></li> 
        <br/>
        <li><a href="/tip.index" class="navbar-item">Tips & Insight</a></li> 
        <li><a href="/tip.index" class="navbar-item">Quizzes & Specials</a></li>          
        <li><a href="/user" class="navbar-item">Users</a></li>  
        <li><a href="{{ route('role.index') }}" class="navbar-item">Roles</a></li> 
        <li><a href="{{ route('permission.index') }}" class="navbar-item">Permissions</a></li>                                            
    </ul>

    </nav>