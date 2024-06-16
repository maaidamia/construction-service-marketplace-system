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
                        <h2 class="content-header-title float-start mb-0">Purchasing Services</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        {{ Request::is('services/order/pending') ? 'Pending Service' : '' }}
                                        {{ Request::is('services/order/processing') ? 'Processing Service' : '' }}
                                        {{ Request::is('services/order/finish') ? 'Finish Service' : '' }}
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

            <!-- Bordered table start -->
            <div class="row" id="table-bordered">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pending Services</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>SP</th>
                                        <th>Launch Date</th>
                                        <th>Status</th>
                                        <th>PO Number</th>
                                        <th>Payment</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($pos) === 0)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">No Data Available...</span>
                                        </td>
                                    </tr>
                                    @else
                                    @foreach ($pos as $i)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$i->service->ser_data1}}</span>
                                        </td>
                                        <td>{{$i->sp->name}}</td>
                                        <td>{{$i->po_data1}}</td>
                                        @if ($i->po_data14 == 0)
                                        <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                                        @endif
                                        @if ($i->po_data14 == 1)
                                        <td><span class="badge rounded-pill badge-light-info me-1">Processing</span></td>
                                        @endif
                                        @if ($i->po_data14 == 2)
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Finish</span></td>
                                        @endif
                                        <td>{{$i->po_data2}}</td>
                                        <td>
                                            <a href="{{$i->po_data15 !== NULL ? route('po.payment.download', $i->po_data15) : '#'}}">{{$i->po_data15 !== NULL ? 'Uploaded' : 'Not Complete'}}</a>
                                            
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('tickets.create', $i->po_data2)}}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Issues</span>
                                                    </a>
                                                    @if (Auth::user()->hasRole('user') && $i->po_data15 === NULL)
                                                    <a class="dropdown-item" href="{{route('po.payment.create', $i->id)}}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Upload Payment Details</span>
                                                    </a>
                                                    @endif
                                                    @if (Auth::user()->hasRole('services'))
                                                    <a class="dropdown-item" href="{{route('po.view.update', $i->id)}}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bordered table end -->
            
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