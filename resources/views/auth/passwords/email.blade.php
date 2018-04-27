@extends('layouts.auth')

@section('content')


<section class="section is-medium">
    <div class="hero-body">
        <div class="container">

        <div class="columns">
            <div class="column"></div>
                <div class="column is-4">
                    <div class="card">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif          
                            <div class="card-content">
                                <p class="title is-4 has-text-centered">Reset Your Password</p>
                                               
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="field">
                                        <input type="email" class="input {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                                name="email" value="{{ old('email') }}"  placeholder="Email address" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="field">
                                        <div class="control has-text-centered">
                                            <button type="submit" class="button is-dark is-wide">
                                                RESET
                                            </button>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="control has-text-centered">
                                            <a class="is-link" href="/login">
                                                Or sign in!
                                            </a>
                                        </div>
                                    </div>                                    
                                </form> 

                            </div>  
                    </div>            
                </div>            
            <div class="column"></div>
        </div>
     </div>    
</section>

@endsection
