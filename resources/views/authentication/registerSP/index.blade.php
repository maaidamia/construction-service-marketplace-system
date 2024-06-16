@extends('authentication.master')

@section('content-auth')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <!-- Brand logo-->
                    <a class="brand-logo" href="{{route('front.service.list')}}">
                        <img src="{{ asset('front/assets/60347.jpg') }}" alt="HTML tutorial" style="height:30px;">
                        <h2 class="brand-text text-primary ms-1">CSMS</h2>
                    </a>
                    <!-- /Brand logo-->

                    <!-- Left Text-->
                    <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center">
                            <img class="img-fluid w-100" src="{{asset('back/app-assets/images/illustration/Software_engineer-cuate.svg')}}" alt="multi-steps" />
                        </div>
                    </div>
                    <!-- /Left Text-->

                    <!-- Register-->
                    <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                        <div class="width-700 mx-auto">
                            <div class="bs-stepper register-multi-steps-wizard shadow-none">

                                {{-- Header Start --}}
                                <div class="bs-stepper-header px-0" role="tablist">
                                    <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-box">
                                                <i data-feather="home" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Account</span>
                                                <span class="bs-stepper-subtitle">Enter username</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line">
                                        <i data-feather="chevron-right" class="font-medium-2"></i>
                                    </div>
                                    <div class="step">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-box">
                                                <i data-feather="user" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">Personal</span>
                                                <span class="bs-stepper-subtitle">Enter Information</span>
                                                <span class="bs-stepper-subtitle" style="color: red;">*After Login*</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                {{-- Header End --}}


                                <div class="bs-stepper-content px-0 mt-4">
                                    <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                                        <div class="content-header mb-2">
                                            <h2 class="fw-bolder mb-75">Account Information</h2>
                                            <span>Enter your account details to become a Service Provider</span>
                                        </div>

                                        {{-- Form Start --}}
                                        <form action="{{ route('registerSP.store') }}" method="POST">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label" for="username">Full Name</label>
                                                    <input type="text" name="fname" id="fname" class="form-control @error('fname') error @enderror" placeholder="John Doe" />
                                                    
                                                    @error('fname')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label" for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control @error('email') error @enderror" placeholder="john.doe@email.com" aria-label="john@deo.com" />
                                                    
                                                    @error('email')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="input-group input-group-merge form-password-toggle">
                                                        <input type="password" name="password" id="password" class="form-control @error('password') error @enderror" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                    </div>

                                                    @error('password')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                                    <div class="input-group input-group-merge form-password-toggle">
                                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') error @enderror" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                    </div>

                                                    @error('password_confirmation')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between mt-2">
                                                <a href="{{route('front.service.list')}}" class="btn btn-outline-secondary btn-prev" disabled>
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Back</span>
                                                </a>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                                    <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                            
                                        </form>
                                        {{-- Form End --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('css-addon')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/pages/authentication.css')}}">
<!-- END: Page CSS-->

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/forms/select/select2.min.css')}}">
<!-- END: Vendor CSS-->
@endsection

{{-- CSS and JS --}}

@section('js-addon')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('back/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
{{-- <script src="{{asset('back/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('back/app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('back/app-assets/js/scripts/pages/auth-register.js')}}"></script>
<!-- END: Page JS-->
@endsection