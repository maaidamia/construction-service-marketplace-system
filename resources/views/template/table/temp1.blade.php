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
                        <h2 class="content-header-title float-start mb-0">Sample Table</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tilte</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Title 2</a>
                                </li>
                                <li class="breadcrumb-item active">Title
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
                            <h4 class="card-title">Bordered table</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Add <code>.table-bordered</code> for borders on all sides of the table and cells. For Inverse Dark Table, add
                                <code>.table-dark</code> along with <code>.table-bordered</code>.
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Client</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{asset('back/app-assets/images/icons/angular.svg')}}" class="me-75" height="20" width="20" alt="Angular" />
                                            <span class="fw-bold">Angular Project</span>
                                        </td>
                                        <td>Peter Charls</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="{{asset('back/app-assets/images/portrait/small/avatar-s-5.jpg')}}" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="{{asset('back/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="{{asset('back/app-assets/images/portrait/small/avatar-s-7.jpg')}}" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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





{{-- CSS addon --}}
@section('css-addon')
@endsection

{{-- JS addon --}}
@section('js-addon')
@endsection