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
                                <h4 class="card-title">Multiple Column</h4>
                            </div>
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">First Name</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Last Name</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="city-column">City</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="country-floating">Country</label>
                                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="company-column">Company</label>
                                                <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="email-id-column">Email</label>
                                                <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="reset" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
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