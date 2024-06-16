@extends('front.layouts.master')

@section('class_name_body', 'page__applicationform')
@section('class_name_main', 'position-relative')

@section('content')
<div class="detail-header-background">
    <img src="{{ asset('front/assets/detail-header-image-2560x330.png') }}" alt="" />
</div>
<!-- /.detail-background -->

<div class="container-xxl">
    <div class="position-relative py-43 py-lg-80">
        <div class="d-grid gap-10 text-center">
            <h4 class="heading-section-4 text-white mb-0">Service Details</h4>
            <div class="heading-text-2 text-white"><a class="text-white text-decoration-none" href="#">Services</a> / <a class="text-white text-decoration-none" href="#">{{$sp_corporate->bdcor_data1}}</a> / <a class="text-white text-decoration-none" href="#">{{$sp_corporate->bdcor_data9}}</a></div>
        </div>
        <!-- /.heading-header -->

        <a class="position-absolute btn btn-rounded btn-white top-0 top-md-50 top-md start-0 translate-middle-md-y p-10 mt-15 mt-md-0" href="/">
            <img src="{{ asset('front/assets/icons/long-arrow-left.svg') }}" class="svg-inject text-dark is-20" alt="" />
        </a>
        <!-- /.btn-back -->

        <button class="btn btn-rounded btn-book position-absolute d-md-none top-100 start-85 translate-middle">
            <img src="{{ asset('front/assets/icons/heart.svg') }}" class="svg-inject svg-icon" alt="" />
        </button>
        <!-- /.btn-book-mobile -->
    </div>
</div>
<!-- /.container -->
<!-- = /. Header Section = -->

<div class="container-xxl">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 order-lg-2">
            <div class="d-grid d-xl-flex bg-white p-20 p-md-34 p-xxl-43 gap-34 rounded-20 shadow-2">
                <div class="d-flex align-items-center">
                    <div class="d-grid gap-10">
                        <h2 class="heading-section-4 text-dark mb-0">{{$service->ser_data1}}</h2>
                        <div class="fs-14">Create on {{$service->created_at->diffForHumans()}}</div>
                    </div>
                    <!-- /.job-title and job-meta -->
                </div>
            </div>

            <div class="d-grid bg-white p-20 p-md-34 p-xxl-43 mt-24 gap-34 rounded-20 shadow-2">
                <h2 class="heading-section-4 text-dark mb-0">Fill the applications</h2>

                <form action="{{ route('front.service.order.store', $service->id) }}" class="row" method="POST">
                    @csrf

                    <div class="col-md-6 col-xl-12 my-15 my-xl-24">
                        <label for="inputFullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control rounded-pill" id="inputFullname" placeholder="Type here" name="fname"/>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6 col-xl-12 my-15 my-xl-24">
                        <label for="inputAddress" class="form-label">Full Address</label>
                        <input type="text" class="form-control rounded-pill" id="inputAddress" placeholder="Type here" name="faddress"/>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6 col-xl-4 my-15 my-xl-24">
                        <label for="inputPhonenumber" class="form-label">Phone Number</label>
                        <input type="number" class="form-control rounded-pill" id="inputPhonenumber" placeholder="Type here" name="phone"/>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6 col-xl-4 my-15 my-xl-24">
                        <label for="inputEmailaddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control rounded-pill" id="inputEmailaddress" placeholder="Type here" name="email"/>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6 col-xl-4 my-15 my-xl-24">
                        <label for="inputLaunchdate" class="form-label">Expected Launch Date</label>
                        <input type="text" class="form-control input-date rounded-pill" id="inputLaunchdate" placeholder="MM DD, YYYY" name="ldate"/>
                    </div>
                    <!-- /.col -->

                    <div class="col-12 my-15 my-xl-24">
                        <label for="textareaAboutyou" class="form-label">Description</label>
                        <textarea class="form-control" id="textareaAboutyou" rows="5" placeholder="Type here" name="description"></textarea>
                    </div>
                    <!-- /.col -->

                    <div class="col-12 d-flex my-15 my-xl-24">
                        <button type="submit" class="btn btn-primary fw-semiBold py-12 px-24 px-md-60 rounded-pill" role="button">Submit</button>
                        <!-- /.btn-submit -->

                        <a class="btn btn-cultured text-philippine-gray fw-semiBold py-12 px-20 ms-auto rounded-pill" href="#" role="button">Cancel</a>
                        <!-- /.btn-cancel -->
                    </div>
                    <!-- /.col -->
                </form>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.col -->

        <div class="col-12 col-lg-4 col-xl-3 mt-20 mt-lg-0 order-lg-1">
            <div class="d-grid gap-34 bg-white p-20 py-43 rounded-20 shadow-2">
                <div class="d-grid text-center gap-34 mx-auto">
                    <img src="{{ asset('front/assets/job-logo-image-115x115.png') }}" class="img-avatar mx-auto rounded-pill" alt="job-logo-1" />
                    <!-- /.company-image -->

                    <div class="d-grid gap-10">
                        <h6 class="heading-text-1 fw-medium mb-0">
                            <a class="text-dark text-decoration-none" href="#">{{$sp_corporate->bdcor_data1}}</a>
                        </h6>
                        <div class="fs-14">
                            <a class="text-gray text-decoration-none" href="#">{{$sp_corporate->bdcor_data9}}</a>
                        </div>
                    </div>
                    <!-- /.company-info -->

                    {{-- <button class="btn btn-primary fw-semiBold py-12 rounded-pill">+ Follow</button> --}}
                    <!-- /.btn-follow -->
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="info-card">
                            <div class="info-card-icon bg-blue-violet">
                                <img src="{{ asset('front/assets/icons/user.svg') }}" class="svg-inject is-16" alt="" />
                            </div>
                            <div class="info-card-content gap-5 flex-fill">
                                <h6 class="info-card-title fw-semiBold">{{$sp_corporate->bdcor_data8}}</h6>
                                <div class="info-card-desc">Employee</div>
                            </div>
                        </div>
                        <!-- /.info-card-component -->
                    </div>
                    <!-- /.col -->

                    <div class="col-12 mt-25">
                        <div class="info-card">
                            <div class="info-card-icon bg-bright-gray text-gray-100">
                                <img src="{{ asset('front/assets/icons/mark.svg') }}" class="svg-inject is-16" alt="" />
                            </div>
                            <div class="info-card-content gap-5 flex-fill">
                                <h6 class="info-card-title fw-semiBold">{{$sp_corporate->bdcor_data5}}</h6>
                                <div class="info-card-desc">Location</div>
                            </div>
                        </div>
                        <!-- /.info-card-component -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="border-top"></div>
                <!-- /.gap-border -->

                <div class="d-grid gap-15">
                    <h6 class="fs-15 mb-0">Website Company</h6>
                    <div class="fs-14">
                        <p>{{$sp_corporate->bdcor_data10}}</p>
                    </div>
                </div>
                <!-- /.company-about -->

                <div class="d-flex align-items-center gap-15">
                    {{-- <a href="#" class="btn btn-apply fw-semiBold py-12 w-100 rounded-pill">{{count($sp_services)}} Services</a> --}}
                    <!-- /.btn-vacancy -->

                    {{-- <a href="#" class="btn btn-white text-dark fw-semiBold py-12 w-100 border border-platinum rounded-pill shadow-none">More Detail</a> --}}
                    <!-- /.btn-more-detail -->
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- = /. Main Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

<div class="container py-60 py-lg-100">
    <div class="swiper image-slider client-logo-slider mx-xl-34 mx-xxl-80">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('front/assets/client-logo-image.png')}}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{asset('front/assets/client-logo-image.png')}}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{asset('front/assets/client-logo-image.png')}}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{asset('front/assets/client-logo-image.png')}}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{asset('front/assets/client-logo-image.png')}}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- = /. Logo Client Section = -->
@endsection