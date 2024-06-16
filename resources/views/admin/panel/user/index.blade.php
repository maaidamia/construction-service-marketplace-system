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
                        <h2 class="content-header-title float-start mb-0">Human Resource</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Users</a>
                                </li>
                                <li class="breadcrumb-item active">All
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
                            <h4 class="card-title">Listing Users</h4>
                        </div>
                        <!-- Inputs Group with Buttons Start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <div class="input-group">
                                        <button class="btn btn-outline-primary waves-effect" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Button on both side" aria-label="Amount">
                                        <button class="btn btn-outline-primary waves-effect" type="button">Search !</button>
                                    </div>
                                </div>
                                <div class="col-md-2 col-12 mb-1">
                                    <div class="input-group">
                                        <div class="">
                                            <select class="form-select" id="basicSelect">
                                                <option>All</option>
                                                <option>Admin</option>
                                                <option>Service Provider</option>
                                                <option>Client</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-12 mb-1">
                                    <div class="btn-group">
                                        <a href="{{ route('panel.user.create') }}" class="btn btn-primary waves-effect waves-float waves-light">
                                            Add New
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inputs Group with Buttons End -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$i->name}}</span>
                                        </td>
                                        <td>{{$i->email}}</td>
                                        <td>{{$i->userType}}</td>
                                        <td><span class="badge rounded-pill badge-light-{{$i->isActive == '1' ? 'primary' : 'danger'}} me-1">{{$i->isActive == '1' ? 'Active' : 'Deactive'}}</span></td>
                                        <td>{{$i->created_at->format('Y-m-d')}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('panel.user.show',$i->id) }}">
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