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
                                        Coporate Details
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
                                <h4 class="card-title">Corporate Details</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('bd.corporate.store') }}" method="POST">
                                    @csrf

                                    <div class="row">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Registered Company Name</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('cname') error @enderror" name="cname" value="{{ $data->bdcor_data1 }}" placeholder="Full Legal Name" />

                                                    @error('cname')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Other  Name</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('oname') error @enderror" name="oname" value="{{ $data->bdcor_data2 }}" placeholder="Any Previous Legal Name / Trading Names" />

                                                    @error('oname')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Registration Number</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('rnumber') error @enderror" name="rnumber" value="{{ $data->bdcor_data3 }}" placeholder="Registration Number" />

                                                    @error('rnumber')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Tax Registration Number</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('trnumber') error @enderror" name="trnumber" value="{{ $data->bdcor_data4 }}" placeholder="Tax Registration Number" />

                                                    @error('trnumber')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Country Of Incorporation</label>
                                                    <input type="text" id="Country-Of-Incorporation" class="form-control @error('coi') error @enderror" name="coi" value="{{ $data->bdcor_data5 }}" placeholder="Country Of Incorporation" />

                                                    @error('coi')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Date of Incorporation</label>
                                                    <input type="text" id="fp-default" class="form-control flatpickr-basic @error('doi') error @enderror" name="doi" value="{{ $data->bdcor_data6 }}" placeholder="YYYY-MM-DD" />

                                                    @error('doi')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Corporate Status</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('cs') error @enderror" name="cs" value="{{ $data->bdcor_data7 }}" placeholder="Private Limited, Limited, Partnership Listed, ETC" />

                                                    @error('cs')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Number of Employee</label>
                                                    <input type="number" id="Full-Legal-Name" class="form-control @error('noemp') error @enderror" name="noemp" value="{{ $data->bdcor_data8 }}" placeholder="Number of Employee" />

                                                    @error('noemp')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Nature and Line Business</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('nalb') error @enderror" name="nalb" value="{{ $data->bdcor_data9 }}" placeholder="Please State your core industry and main activity" />

                                                    @error('nalb')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Website</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('website') error @enderror" name="website" value="{{ $data->bdcor_data10 }}" placeholder="Website" />

                                                    @error('website')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Registred Address</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('raddress') error @enderror" name="raddress" value="{{ $data->bdcor_data11 }}" placeholder="Registred Address" />

                                                    @error('raddress')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Business Address</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('baddress') error @enderror" name="baddress" value="{{ $data->bdcor_data12 }}" placeholder="Business Address" />

                                                    @error('baddress')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="telephone-info-vertical-1">Telephone Number</label>
                                                    <input type="number" id="telephone-info-vertical-1" class="form-control @error('telephone_1') error @enderror" name="telephone_1" value="{{ $data->bdcor_data13 }}" placeholder="Telephone Number" />
                                                    @error('telephone_1')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-vertical-1">Email</label>
                                                    <input type="email" id="email-id-vertical-1" class="form-control @error('email_1') error @enderror" name="email_1" value="{{ $data->bdcor_data14 }}" placeholder="Email" />
                                                    @error('email_1')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Branch (if any)</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('branch') error @enderror" name="branch" value="{{ $data->bdcor_data15 }}" placeholder="Branch (if any)" />

                                                    @error('branch')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Branch Addreess</label>
                                                    <input type="text" id="Full-Legal-Name" class="form-control @error('badress') error @enderror" name="badress" value="{{ $data->bdcor_data16 }}" placeholder="Branch Addreess" />

                                                    @error('badress')
                                                    <label class="error">{{ $message }}</label>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="form" value="corporate">

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
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