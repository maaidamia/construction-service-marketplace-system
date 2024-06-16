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
                                <li class="breadcrumb-item"><a href="index.html">My Service</a>
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
                                <h4 class="card-title">Create Services</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('sp.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Service Name</label>
                                        <input type="text" id="basic-addon-name" class="form-control" placeholder="Service Name" name="name">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="select-country1">Category</label>
                                        <select class="form-select" id="select-country1" name="category">
                                            <option value="">Category</option>
                                            @foreach ($dataCat as $i)
                                            <option value="{{$i->id}}">{{$i->scat_data1}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label for="customFile1" class="form-label">Gallery (Size: 4X4)</label>
                                        <input class="form-control" type="file" id="customFile1" name="gallery" multiple>
                                    </div>
                                    <div class="mb-1">
                                        <label class="d-block form-label" for="validationBioBootstrap">Description (Max: 255)</label>
                                        <textarea class="form-control" id="validationBioBootstrap" rows="3" name="description"></textarea>
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