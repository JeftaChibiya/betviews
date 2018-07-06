@extends('layouts.login-lt')

@section('content')

    <div class="columns">
        <div class="column"></div>
        <div class="column card is-4-desktop is-5-tablet">
            <div class="content">
            <p class="title is-4 lato is_white">Sign In</p>
                
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}                                
                    <div class="field">
                        <input type="text" class="input is-large" name="email" placeholder="Email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif                                    
                    </div>
                    <div class="field">
                        <input type="text" class="input is-large" name="password" placeholder="Password">    
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                                                            
                    </div>  

                    <div class="field">                                   
                        <button class="button is-large is_brand is-wide" type="submit">SIGN IN</button>
                    </div>   

                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <a class="" href="/register">
                                    Sign Up!
                                </a>
                            </div>                                        
                        </div>                                     
                        <div class="level-right">
                            <div class="level-item">
                                <a class="" href="password/reset">
                                    Forgot Password?
                                </a>
                            </div>                                   
                        </div>
                    </div>                                                            

                </form>                
            </div>
        </div>
        <div class="column"></div>                    
    </div>                
                              
@endsection