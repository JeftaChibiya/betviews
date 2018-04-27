@extends('layouts.auth')

@section('content')

<div class="section is-medium">
<div class="hero-body">
    <div class="container">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-3">
                    <p class="title is-4 has-text-centered lato">Reset Password</p>
                    
                    <form method="POST" action="{{ route('password.request') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field">
                        <input id="email" type="email"  placeholder="Email Address"
                                class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field">
                        <input id="password" type="password" placeholder="Password"
                                class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field">
                        <input type="password" class="input" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>


                    <div class="field">
                        <div class="control has-text-centered">
                            <button type="submit" class="button is-light is-wide">
                                {{ __('Reset Password') }}
                            </button>
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
