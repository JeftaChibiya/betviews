@extends('layouts.main')

@section('content')

<!-- page title -->
<register-user inline-template>
<div>
<div class="register-view">
        <div class="section">
        <div class="original notice default-clear">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <p class="title is-3 has-text-centered"><b>Join BetViews</b></p> 			

                        <p class="subtitle is-6 has-text-centered">
                            Signing up takes less than a minute! If you're still on the fence,
                            we offer you a '14-day trial' to try us out. You may cancel it at anytime
                        </p>
                    </div>
                </div>
            </div>
        </div>  

        <br><br>        

        <div class="container">
        
            <form action="{{ url('/register') }}" method="POST" id="stripe-form">
                {{ csrf_field() }}
                <div class="columns">
                    <div class="column is-4 is-offset-4 card">  
                        <div class="field">
                            <p class="subtitle is-5">Pick a Subscription</p>
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="subscription" value="v-a" v-model="view">
                                    14 day trial (Free)
                                </label>
                                <label class="radio">
                                    <input type="radio" name="subscription" value="v-b" v-model="view">
                                    Monthly £4.99
                                </label>                         
                            </div>                                   
                        </div>

                    <transition name="component-fade" mode="out-in">
                        <component v-bind:is="view"></component>
                    </transition>                 

                    </div>
                </div> 

                <br/>

                <div class="columns">
                    <div class="column is-4 is-offset-4 card">
                        <p class="subtitle is-5">And Choose Your Credentials</p>   

                        <div class="field">
                            <input type="text" class="input" name="name" placeholder="Username">
                        </div>

                        <div class="field">
                            <input type="text" class="input" name="email" placeholder="Email Address">
                        </div>

                        <div class="field">
                            <input type="text" class="input" name="password" placeholder="Password">
                        </div>

                        <div class="field">
                            <input type="text" class="input" name="password_confirmation" placeholder="Repeat Password">
                        </div>							

                        <div class="field">
                            <button type="submit" class="button is-fullwidth">
                                <span>REGISTER</span>
                            </button>
                        </div>											

                    </div>
                </div>            
            </form>
        </div>        
        </div>
    </div>    
</div>
</register-user>
@endsection