@extends('layouts.app')

<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->


@section('content')
<div class="authentication">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header slideDown">
                            <div class="logo"><img src="assets/images/logo.png" alt="Nexa"></div>
                            <h1>SEO Kenya</h1>
                            <ul class="list-unstyled l-social">
                                <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <form  class="col-lg-12" id="sign_in" method="POST" action="{{ route('register') }}">
                            @csrf
                        <h5 class="title">Register a new membership</h5>

                        {{--  <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    <label for="first_name" class="form-label">First Name</label>
                                </div>
                                @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>  --}}
                        <div class="form-group form-float">

                            <div class="form-line">

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                                <label class="form-label">Name</label>
                            </div>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        </div>

                            <div class="form-group form-float">

                                <div class="form-line">

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    <label class="form-label">Email Address</label>
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="form-group form-float">

                                    <div class="form-line">

                                        <input id="text" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                                        <label class="form-label">Phone Number</label>
                                    </div>
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                </div>



                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                </div>
                                @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                            </div>



                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    <label for="password-confirm"  class="form-label">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>


                        <div>
                             <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                        </div>



                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>



                    </form>

                    <div class="col-lg-12 m-t-20">
                        <a href="login">You already have a membership?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
