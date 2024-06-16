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
                        <h2 class="content-header-title float-start mb-0">Purchasing</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">#{{$po->po_data2}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Upload Payment Detail</a>
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
                                <h4 class="card-title">Payment Details For #{{ $po->po_data2 }}</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('po.payment.store', $po->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="payment-name-column">Receipt</label>
                                                <input type="file" id="payment-name-column" class="form-control" name="payment">

                                                @error('payment')
                                                <label class="error">{{ $message }}</label>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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