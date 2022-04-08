@extends('frontend.layouts.master')
@section('title')
    Join as Freelancer
@endsection
@section('content')
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Join as Freelancer</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" value="3" name="role_id">
                    <input type="hidden" value="pending" name="status">
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class=" @error('name') is-invalid @enderror" value="Name" name="name"
                            autocomplete="name" autofocusname="Username" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Username';}" required="">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" value="Email" name="email" class=" @error('email') is-invalid @enderror"
                            onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone"
                            value="Phone Number" autocomplete="phone" autofocusname="phone" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Username';}" required="">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" value="Password" name="password"
                            class="@error('password') is-invalid @enderror" name="password" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Password';}" required="">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="password-confirm" type="password" value="Confirm Password" name="password_confirmation"
                            onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}"
                            required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>
    </div>
@endsection
