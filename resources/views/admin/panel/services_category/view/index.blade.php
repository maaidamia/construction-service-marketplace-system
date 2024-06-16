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
                                <li class="breadcrumb-item"><a href="index.html">Category</a>
                                </li>
                                <li class="breadcrumb-item active">Create
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Basic multiple Column Form section start -->
            <section class="">
                <div class="row">
                    <!-- Bootstrap Validation -->
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Services Category</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('sp.scat.update', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Category Name</label>
                                        <input type="text" id="basic-addon-name" class="form-control" placeholder="Category Name" name="name" value="{{ $data->scat_data1 }}">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="last-name-column">Status</label>
                                        <div class="form-check form-switch form-check-primary">
                                            <input type="checkbox" class="form-check-input" id="customSwitch10" {{ $data->scat_data3 == 1 ? 'checked' : '' }} name="status">
                                            <label class="form-check-label" for="customSwitch10">
                                                <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Bootstrap Validation -->
                </div>
            </section>
            <!-- Basic multiple Column Form section end -->




        </div>
    </div>
</div>
@endsection



{{-- CSS addon --}}
@section('css-addon')
@endsection

{{-- JS addon --}}
@section('js-addon')
@endsection