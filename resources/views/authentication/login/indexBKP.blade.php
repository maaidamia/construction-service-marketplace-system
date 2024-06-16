@extends('authentication.master')

@section('content-auth')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Login basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="index.html" class="brand-logo">
                                <img src="https://toppng.com/uploads/preview/more-examples-logo-png-vodafone-logo-11563157773d9w4iqzxlm.png" alt="HTML tutorial" style="height:48px;">
                                <h2 class="brand-text text-primary ms-1">CSMS</h2>
                            </a>

                            <h4 class="card-title mb-1">Welcome to CSMS! 👋</h4>
                            <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

                            <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-1">
                                    <label for="login-email" class="form-label">Email</label>
                                    {{-- <input type="text" class="form-control" id="login-email" name="login-email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus /> --}}
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="john@example.com" name="email" value="{{ old('email') }}" aria-describedby="login-email" required autocomplete="email" tabindex="1" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    {{-- <div class="d-flex justify-content-between">
                                        <label class="form-label" for="login-password">Password</label>
                                        <a href="auth-forgot-password-basic.html">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div> --}}
                                    
                                    <div class="input-group input-group-merge form-password-toggle">
                                        {{-- <input type="password" class="form-control form-control-merge" id="login-password" name="login-password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" /> --}}
                                        <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" required autocomplete="current-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        {{-- <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" /> --}}
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" tabindex="3" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                            </form>

                            <p class="text-center mt-2">
                                <span>New on our platform?</span>
                                <a href="{{ route('register') }}">
                                    <span>Create an account</span>
                                </a>
                            </p>
                            
                        </div>
                    </div>
                    <!-- /Login basic -->
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


@section('css-addon')
 <!-- BEGIN: Page CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-validation.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/pages/authentication.css')}}">
 <!-- END: Page CSS-->
@endsection

{{-- CSS and JS --}}

@section('js-addon')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('back/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('back/app-assets/js/scripts/pages/auth-login.js')}}"></script>
<!-- END: Page JS-->
@endsection