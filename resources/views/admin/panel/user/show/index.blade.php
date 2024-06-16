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
                                <li class="breadcrumb-item"><a href="index.html">Show</a>
                                </li>
                                <li class="breadcrumb-item active">Name
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
                                <h4 class="card-title">Edit</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{ route('panel.user.update', $data->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Name</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="Name" name="name" value="{{ $data->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Email</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="email" value="{{ $data->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Role</label>
                                                <select class="form-select" id="basicSelect" name="role">
                                                    @foreach ($roles as $i)
                                                        <option value="{{ $i->name }}" {{ $data->userType == $i->name ? 'selected' : '' }}>{{$i->display_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Status</label>
                                                <div class="form-check form-switch form-check-primary">
                                                    <input type="checkbox" class="form-check-input" id="customSwitch10" {{ $data->isActive == 1 ? 'checked' : '' }} name="status">
                                                    <label class="form-check-label" for="customSwitch10">
                                                        <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                        <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{ route('panel.user') }}" class="btn btn-outline-secondary waves-effect">Back</a>
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