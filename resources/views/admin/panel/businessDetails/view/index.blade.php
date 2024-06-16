@extends('admin.layouts.master')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Form Wizard</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item active">Form Wizard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
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

            <!-- Vertical Wizard -->
            <section class="vertical-wizard">
                <div class="bs-stepper vertical vertical-wizard-example">

                    <div class="bs-stepper-header">
                        <div class="step" data-target="#corporate-details-vertical" role="tab" id="corporate-details-vertical-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">1</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Corporate Details</span>
                                    <span class="bs-stepper-subtitle">Setup Corporate Details</span>
                                </span>
                            </button>
                        </div>

                        <div class="step" data-target="#contact-info-vertical" role="tab" id="contact-info-vertical-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Contact Info</span>
                                    <span class="bs-stepper-subtitle">Contact Info</span>
                                </span>
                            </button>
                        </div>
                        
                        <div class="step" data-target="#document-info-vertical" role="tab" id="document-info-vertical-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Document Info</span>
                                    <span class="bs-stepper-subtitle">Document Info</span>
                                </span>
                            </button>
                        </div>

                        <div class="step" data-target="#status-account-links-vertical" role="tab" id="status-account-links-vertical-trigger">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">4</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Status Account</span>
                                    <span class="bs-stepper-subtitle">Verify the account</span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="bs-stepper-content">
                        <div id="corporate-details-vertical" class="content" role="tabpanel" aria-labelledby="corporate-details-vertical-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Corporate Details</h5>
                                <small class="text-muted">View Corporate Details.</small>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">Registered Company Name</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data1}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">other name</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data2}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">registration number</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data3}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">tax registration number</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data4}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">country of incorparation</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data5}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">date of incorparation</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data6}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">corparate status</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data7}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">number of employee</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data8}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">Nature and Line of Business</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data9}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">website</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data10}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">registered address</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data11}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">business address</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data12}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">telephone number</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data13}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-email">email address</label>
                                    <input type="email" id="vertical-email" class="form-control" placeholder="{{$corporate->bdcor_data14}}" aria-label="john.doe" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">branch (if any)</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data15}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-username">branch address</label>
                                    <input type="text" id="vertical-username" class="form-control" placeholder="{{$corporate->bdcor_data16}}" readonly/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div id="contact-info-vertical" class="content" role="tabpanel" aria-labelledby="contact-info-vertical-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Contact Info</h5>
                                <small>Contact Info for Bussiness Details.</small>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-first-name">Primary Contact Person</label>
                                    <input type="text" id="vertical-first-name" class="form-control" placeholder="{{$contact->bdcon_data1}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-last-name">Department</label>
                                    <input type="text" id="vertical-last-name" class="form-control" placeholder="{{$contact->bdcon_data2}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-first-name">Telephone Number</label>
                                    <input type="text" id="vertical-first-name" class="form-control" placeholder="{{$contact->bdcon_data3}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-email">Email</label>
                                    <input type="email" id="vertical-email" class="form-control" placeholder="{{$contact->bdcon_data4}}" aria-label="john.doe" readonly/>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-first-name">Secondary Contact Person</label>
                                    <input type="text" id="vertical-first-name" class="form-control" placeholder="{{$contact->bdcon_data5}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-last-name">Department</label>
                                    <input type="text" id="vertical-last-name" class="form-control" placeholder="{{$contact->bdcon_data6}}" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-first-name">Telephone Number</label>
                                    <input type="text" id="vertical-first-name" class="form-control" placeholder="{{$contact->bdcon_data7}}" readonly/>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-email">Email</label>
                                    <input type="email" id="vertical-email" class="form-control" placeholder="{{$contact->bdcon_data8}}" aria-label="john.doe" readonly/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div id="document-info-vertical" class="content" role="tabpanel" aria-labelledby="document-info-vertical-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Document Info</h5>
                                <small>Document Info for Bussiness Details.</small>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-first-name">SSM</label>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <a href="{{ route('bd.document.download', $document->bddoc_data1) }}" class="btn btn-info waves-effect waves-float waves-light">Download</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-first-name">Certificate</label>
                                </div>
                                <div class="mb-1 col-md-6">
                                    <a href="{{ route('bd.document.download', $document->bddoc_data2) }}" class="btn btn-info waves-effect waves-float waves-light">Download</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>

                        <form action="{{ route('admin.bd.verify', $user->id) }}" method="POST">
                            @csrf
                            <div id="status-account-links-vertical" class="content" role="tabpanel" aria-labelledby="status-account-links-vertical-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Verify Account</h5>
                                    <small>Everything good, this account ready be Service Provider</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="customSwitch1" name="status" {{$user->isActive == '1' ? 'checked' : ''}}>
                                            <label class="form-check-label" for="customSwitch1">Toggle this for active this account.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /Vertical Wizard -->

        </div>
    </div>
</div>
@endsection


{{-- CSS addon --}}
@section('css-addon')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/forms/select/select2.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-wizard.css')}}">
<!-- END: Page CSS-->
@endsection

{{-- JS addon --}}
@section('js-addon')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('back/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('back/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('back/app-assets/js/scripts/forms/form-wizard.js')}}"></script>
<!-- END: Page JS-->
@endsection
