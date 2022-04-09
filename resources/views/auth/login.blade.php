@extends('frontend.layouts.master')
@section('title')Login
@endsection
@section('content')
<div class="login">
	
    <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="email"  class="@error('email') is-invalid @enderror" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required autocomplete="email" required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password" class=" @error('password') is-invalid @enderror"  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                        <label class="form-check-label " for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <br>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="forg">
                @if (Route::has('password.request'))
                <a class="btn btn-link forg-left" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
                <a href="{{ route('customer.register') }}" class="forg-right">Register</a>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
