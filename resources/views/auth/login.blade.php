@extends('layouts.app')
@section('content')
<div  align="center"><img src="/img/arta-logo.png" width="170" height="60"></div>



    <div class="container"><br>    
    <div class="row justify-content-center">    
    <div class="col-md-4">
    <div class="card">

            
            
        <div  align="center"><img src="/img/login-logo.png" width="150" height="150"></div>
        <div class="card-body"> 
            <p align="center" class="TxtBlue"><b>DOCUMENT</b>
            <b class="TxtRed">TRACKING SYSTEM</b></p> 

            <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="form-group">
                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="form-group">
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
                </label>
                </div>
                </div>

                <button type="submit" class="block"><b>LOGIN</b></button>
                            
                <div class="form-group">        
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register ?</a>
                @endif
                @endif
                </div>


            </form>

                    
    </div>
    </div>
    </div>
    </div>
    </div>

<!--<div align="center"> 
    <img src="/img/footer.png" width="100%" height="20%">
</div>-->
        
@endsection

<style>
        .block {
        display: block;
        width: 100%;
        border: none;
        background-color: #c4013d;
        color: white;
        padding: 8px 28px;
        font-size: 10px;
        cursor: pointer;
        text-align: center;
        }
        .block:hover {
        background-color: #0d3093;
        color: white;
        }
        .TxtBlue {
        font-size: 20px;
        font-family: "Century Gothic";
        color: #0d3093;
        }
        .TxtRed {
        font-size: 20px;
        font-family: "Century Gothic";
        color: #c5003e;
        }
 </style>

    