@extends('layouts.app')

@section('content')
<div class="container" id="loginBody">

<!-- <center><h1 id="plog">P L O G</h1></center> -->

<div class="card-header" id='header'>
<div class="row justify-content-center">
        <div class="col-md-8">
        <br><br>
            <center><img src="/img/logo.png"></center>

            </div>
            </div>
            </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card">
            
                <br>
               

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              
                            </div>
                           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="loginBtn" type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" id="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <a id="or"> or </a>
         
                                    <a class="btn btn-link" id="signUp" href="/register">
                                        Sign Up!
                                    </a>
                                @endif
                                
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                     
                            </div>
                        </div>

                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
