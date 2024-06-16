@extends('admin.layouts.master')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-header row">
            {{-- breadcrumbs --}}
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Business Details</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">View</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Contact Details
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{-- breadcrumbs --}}

            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <!-- Basic Vertical form layout section start -->
            <section id="basic-vertical-layouts">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contact Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="contact-info-vertical-1">SSM</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <a href="{{ route('bd.document.download', $data->bddoc_data1) }}" class="btn btn-info waves-effect waves-float waves-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <label class="form-label" for="contact-info-vertical-1">Certificate</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-1">
                                            <a href="{{ route('bd.document.download', $data->bddoc_data2) }}" class="btn btn-info waves-effect waves-float waves-light">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Vertical form layout section end -->
            
        </div>

    </div>
</div>
@endsection





{{-- CSS and JS addon --}}

@section('css-addon')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-validation.css')}}">
<!-- END: Page CSS-->

<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
@endsection
@section('js-addon')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('back/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('back/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
<!-- END: Page JS-->
@endsection