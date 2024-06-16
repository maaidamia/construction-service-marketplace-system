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
                                <li class="breadcrumb-item active">View
                                </li>
                            </ol>
                        </div>
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
                            <h4 class="card-title">Listing Services Category</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$i->scat_data1}}</span>
                                        </td>
                                        <td>{{$i->scat_data2}}</td>
                                        <td><span class="badge rounded-pill badge-light-{{$i->scat_data3 == '1' ? 'primary' : 'danger'}} me-1">{{$i->scat_data3 == '1' ? 'Active' : 'Deactive'}}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('sp.scat.show',$i->id) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>View</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $data->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bordered table end -->
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