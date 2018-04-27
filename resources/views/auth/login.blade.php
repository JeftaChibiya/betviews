@extends('layouts.auth')

@section('content')


<div class="section is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-3">
                        <p class="title is-4 has-text-centered lato white">Sign in to Betviews</p>
                        
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}                                
                            <div class="field">
                                <input type="text" class="input" name="email" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                                    
                            </div>
                            <div class="field">
                                <input type="text" class="input" name="password" placeholder="Password">    
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                                                            
                            </div>  

                            <div class="field">                                   
                                <button class="button is-dark is-wide" type="submit">SIGN IN</button>
                            </div>   

                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <a class="is-link-success" href="/register">
                                        Sign Up!
                                        </a>
                                    </div>                                        
                                </div>                                     
                                <div class="level-right">
                                    <div class="level-item">
                                        <a class="is-link-success" href="password/reset">
                                         Forgot Password?
                                        </a>
                                    </div>                                   
                                </div>
                            </div>                                                            

                        </form>
                </div>
                <div class="column"></div>                    
            </div>                
        </div>
    </div>
    </div>                         
@endsection