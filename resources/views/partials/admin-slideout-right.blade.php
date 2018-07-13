<nav id="right-menu" class="slideout-menu slideout-menu-right">
    <header>
        <div class="menu-brand">
            <p class="title is-5 is_white">New Topic</p>
        </div>                    
    </header>
    <br/>
    
    <form method="POST">
    <!-- @submit.prevent="onSubmit" -->
        <div class="field">
            <label for="name">Name</label>
            <input class="input" v-model="name" placeholder="Premier League"></input>
        </div>

        <div class="field">
            <button type="submit" class="button is-light is-wide">SAVE</button>
        </div>
    </form>    
</nav>