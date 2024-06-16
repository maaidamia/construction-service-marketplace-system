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
                        <h2 class="content-header-title float-start mb-0">Service</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Purchasing</a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.html">Show</a>
                                </li>
                                <li class="breadcrumb-item active">PO Number: <b>{{$data->po_data2}}</b>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">PO Number: <b>{{$data->po_data2}}</b></h4>
                            </div>
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('po.view.store', $data->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">User Name</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="{{$user->name}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">SP Name</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="{{$sp->name}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="email-id-column">User Email</label>
                                                <input type="email" id="email-id-column" class="form-control" placeholder="{{$user->email}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="company-column">Service Apply</label>
                                                <input type="text" id="company-column" class="form-control" placeholder="{{$service->ser_data1}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="city-column">Project Address</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="{{$data->po_data6}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12 mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="pending" {{$data->po_data14 === 0 ? 'checked' : ''}}>
                                                <label class="form-check-label" for="inlineRadio1">Pending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="processing" {{$data->po_data14 === 1 ? 'checked' : ''}}>
                                                <label class="form-check-label" for="inlineRadio1">Processing</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="finish" {{$data->po_data14 === 2 ? 'checked' : ''}}>
                                                <label class="form-check-label" for="inlineRadio1">Complete</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic multiple Column Form section end -->
        </div>

        <div class="content-body">
        </div>
    </div>
</div>
@endsection