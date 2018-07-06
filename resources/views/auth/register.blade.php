@extends('layouts.register-lt')

@section('content')

<!-- page title -->
<div class="register-view">   
        <div class="container">
                <br/>

                <div class="columns">
                    <div class="column"></div>
                    <div class="column is-5">
                        
                       <form action="{{ url('/register') }}" method="POST">
                        
                        {{ csrf_field() }}

                        <div class="margin-20">
                            <p class="title is-4">Join us for a personalised experience.</p>  
                        </div>

                        <p class="subtitle is-5"> <b>Create your account.</b> </p>   

                        <div class="field label_input_container">
                            <input type="text" class="input is-large" name="username" required>
                            <label for="username">Username</label>
                        </div>                        

                        <div class="field label_input_container">
                            <input type="email" class="input is-large" name="email" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="field label_input_container">
                            <input type="text" class="input is-large" name="password" required>
                            <label for="password">Password</label>
                        </div>

                        <br>

                        <div class="field">
                            <button type="submit" class="button is_brand is-fullwidth is-large">
                                <span>CONTINUE</span>
                            </button>
                        </div>											
                        
                        
                        </form>

                    </div>                    
                    <div class="column"></div>
                </div>            

        </div>        
    </div>    
</div>
@endsection