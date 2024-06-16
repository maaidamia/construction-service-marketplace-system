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
                    <!-- Register basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="index.html" class="brand-logo">
                                <img src="https://toppng.com/uploads/preview/more-examples-logo-png-vodafone-logo-11563157773d9w4iqzxlm.png" alt="HTML tutorial" style="height:48px;">
                                <h2 class="brand-text text-primary ms-1">CSMS</h2>
                            </a>

                            <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
                            <p class="card-text mb-2">Make your app management easy and fun!</p>

                            <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="mb-1">
                                    <label for="register-username" class="form-label">Full Name</label>
                                    {{-- <input type="text" class="form-control" id="register-username" name="register-username" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus /> --}}
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="johndoe" name="name" value="{{ old('name') }}" required autocomplete="name" tabindex="1" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-1">
                                    <label for="register-email" class="form-label">Email</label>
                                    {{-- <input type="text" class="form-control" id="register-email" name="register-email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" /> --}}
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="john@example.com" required tabindex="2" autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <label for="register-password" class="form-label">Password</label>

                                    <div class="input-group input-group-merge form-password-toggle">
                                        {{-- <input type="password" class="form-control form-control-merge" id="register-password" name="register-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" /> --}}
                                        <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" tabindex="3" name="password" required autocomplete="new-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-1">
                                    <label for="register-password" class="form-label">Confirm Password</label>

                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" tabindex="4" required autocomplete="new-password">
                                    </div>
                                </div>

                                {{-- <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                                        <label class="form-check-label" for="register-privacy-policy">
                                            I agree to <a href="#">privacy policy & terms</a>
                                        </label>
                                    </div>
                                </div> --}}

                                <button type="submit" class="btn btn-primary w-100" tabindex="5">Sign up</button>
                            </form>

                            <p class="text-center mt-2">
                                <span>Already have an account?</span>
                                <a href="{{route('login')}}">
                                    <span>Sign in instead</span>
                                </a>
                            </p>

                        </div>
                    </div>
                    <!-- /Register basic -->
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
<script src="{{asset('back/app-assets/js/scripts/pages/auth-register.js')}}"></script>
<!-- END: Page JS-->
@endsection