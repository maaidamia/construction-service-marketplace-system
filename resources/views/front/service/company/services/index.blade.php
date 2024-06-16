@extends('front.layouts.master')

@section('class_name_body', 'page__jobdetail')
@section('class_name_main', 'position-relative')

@section('content')
{{-- Start Here --}}

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

        <a class="position-absolute btn btn-rounded btn-white top-0 top-md-50 top-md start-0 translate-middle-md-y p-10 mt-15 mt-md-0" href="{{ route('front.service.list') }}">
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
            <div class="d-grid bg-white p-20 p-md-34 p-xxl-43 gap-34 rounded-20 shadow-2">
                <div class="d-flex align-items-center">
                    <div class="d-grid gap-10">
                        <h2 class="heading-section-4 text-dark mb-0">{{$sp_corporate->bdcor_data1}}</h2>
                        <div class="fs-14">Join on {{$sp->created_at->diffForHumans()}}</div>
                    </div>
                    <!-- /.job-title and job-meta -->

                    {{-- <div class="d-none d-md-flex align-items-md-center gap-10 gap-xl-20 ms-auto ps-20">
                        <a class="btn btn-apply fw-semiBold py-12 px-34 rounded-pill" href="#">Apply Now</a>
                        <!-- /.btn-apply -->

                        <button class="btn btn-rounded btn-book">
                            <img src="{{ asset('front/assets/icons/heart.svg') }}" class="svg-inject svg-icon" alt="" />
                        </button>
                        <!-- /.btn-book -->
                    </div> --}}
                    <!-- end action-btn-desktop -->
                </div>

                {{-- <div class="d-flex flex-column flex-xl-row gap-15 gap-xl-34 py-10 py-lg-20">
                    <div class="info-card">
                        <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                            <img src="{{ asset('fassets/icons/sack-dollar.svgront/') }}" class="svg-inject svg-icon" alt="" />
                        </div>
                        <div class="info-card-content flex-nofill">
                            <h6 class="info-card-title">$14,000 - $25,000</h6>
                            <div class="info-card-desc">Monthly Salary</div>
                        </div>
                    </div>
                    <!-- /.info-card-component -->

                    <div class="info-card">
                        <div class="info-card-icon bg-deep-lilac rounded-pill">
                            <img src="{{ asset('front/assets/icons/compas.svg') }}" class="svg-inject svg-icon" alt="" />
                        </div>
                        <div class="info-card-content flex-nofill">
                            <h6 class="info-card-title">2-3 Years</h6>
                            <div class="info-card-desc">Experience</div>
                        </div>
                    </div>
                    <!-- /.info-card-component -->

                    <div class="info-card">
                        <div class="info-card-icon bg-rajah rounded-pill">
                            <img src="{{ asset('fassets/icons/mark.svgront/') }}" class="svg-inject svg-icon" alt="" />
                        </div>
                        <div class="info-card-content flex-nofill">
                            <h6 class="info-card-title">London, England</h6>
                            <div class="info-card-desc">Location</div>
                        </div>
                    </div>
                    <!-- /.info-card-component -->
                </div> --}}

                <div class="d-grid gap-15">
                    <div class="fs-14 fw-semiBold">Job Description</div>
                    <div class="fs-16">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                            velit, s
                        </p>
                    </div>
                </div>
                <!-- /.job-description -->

                <div class="d-grid gap-15">
                    <div class="fs-14 fw-semiBold">Gallery</div>
                    <div class="swiper w-100 image-slider gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a data-fslightbox="gallery" href="{{ asset('front/assets/gallery-image-257x120.png') }}">
                                    <img src="{{ asset('front/assets/gallery-image-257x120.png') }}" alt="gallery-1" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a data-fslightbox="gallery" href="{{ asset('front/assets/gallery-image-257x120.png') }}">
                                    <img src="{{ asset('front/assets/gallery-image-257x120.png') }}" alt="gallery-2" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a data-fslightbox="gallery" href="{{ asset('front/assets/gallery-image-257x120.png') }}">
                                    <img src="{{ asset('front/assets/gallery-image-257x120.png') }}" alt="gallery-3" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a data-fslightbox="gallery" href="{{ asset('front/assets/gallery-image-257x120.png') }}">
                                    <img src="{{ asset('front/assets/gallery-image-257x120.png') }}" alt="gallery-4" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.job-gallery-slider -->

                <a class="btn btn-apply fw-semiBold py-12 w-100 rounded-pill d-md-none" href="#">Apply Now</a>
                <!-- /.btn-apply-mobile -->

                <div class="mt-34"></div>
                <!-- /.gap -->
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

                    {{-- <div class="col-6">
                        <div class="info-card">
                            <div class="info-card-icon bg-mikado-yellow">
                                <img src="{{ asset('front/assets/icons/star.svg') }}" class="svg-inject is-16" alt="" />
                            </div>
                            <div class="info-card-content gap-5 flex-fill">
                                <h6 class="info-card-title fw-semiBold">4.5</h6>
                                <div class="info-card-desc">Reviews</div>
                            </div>
                        </div>
                        <!-- /.info-card-component -->
                    </div> --}}
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
                    <a href="#" class="btn btn-apply fw-semiBold py-12 w-100 rounded-pill">{{count($sp_services)}} Services</a>
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

<div class="container-xxl py-60">
    <div class="d-grid gap-12 w-md-50 w-xl-34 mb-60 mx-auto">
        <h2 class="heading-section-3 text-dark text-center mb-0">Available Services</h2>
        <div class="heading-text-2 lh-base text-dark text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
    </div>
    <!-- /.heading-section -->

    <div class="row">
        @if (count($sp_services) === 0)
        <div class="d-xxl-block col-xxl-3 my-12">
            <div class="job-card-grid mx-xxl-15">
                <div class="job-info">
                    <h5 class="job-title">
                        <a href="#">Any Question ?</a>
                    </h5>
                    <h5 class="job-author">
                        <a href="#">No: {{$sp_contact->bdcon_data3}}</a>
                    </h5>
                    <div class="job-author">
                        <a href="#">Email: {{$sp_contact->bdcon_data4}}</a>
                    </div>
                </div>
                <div class="job-action">
                    <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="#">No Avaiable This Time</a>
                </div>
            </div>
            <!-- /.job-card-component -->
        </div>
        @else
        @foreach ($sp_services as $i)
        <div class="col-12 col-md-4 col-xxl-3 my-12">
            <div class="job-card-grid mx-xxl-15">
                {{-- <div class="job-dropdown">
                    <button class="job-dropdown-btn" type="button" id="job-featured-dropdown" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('front/assets/icons/ellipsis.svg') }}" class="svg-inject svg-icon" alt="" />
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="job-featured-dropdown">
                        <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                    </ul>
                </div> --}}
                <div class="job-info">
                    <div class="job-image">
                        <img src="{{ asset('front/assets/job-logo-image-115x115.png') }}" alt="" />
                    </div>
                    <h5 class="job-title">
                        <a href="/jobdetail.html">{{$i->ser_data1}}</a>
                    </h5>
                    <div class="job-author">
                        <a href="#">{{$i->scategory()->first()->scat_data1}}</a>
                    </div>
                </div>
                <ul class="job-detail">
                    <li class="job-detail-item">
                        <div class="job-detail-start">
                            <img src="{{ asset('front/assets/icons/sack-dollar.svg') }}" class="svg-inject svg-icon" alt="" />
                        </div>
                        <div class="job-detail-center">
                            <div class="job-detail-text">RM {{$i->ser_data5}} - {{$i->ser_data6}}</div>
                        </div>
                        <div class="job-detail-end">
                            <div class="job-detail-text" href="#">/service</div>
                        </div>
                    </li>
                    <li class="job-detail-item">
                        <div class="job-detail-start">
                            <img src="{{ asset('front/assets/icons/mark.svg') }}" class="svg-inject svg-icon" alt="" />
                        </div>
                        <div class="job-detail-center">
                            <div class="job-detail-text">{{ $sp_corporate->bdcor_data5 }}</div>
                        </div>
                        <div class="job-detail-end">
                            {{-- <a class="job-detail-text" href="#">View Maps</a> --}}
                        </div>
                    </li>
                </ul>
                <ul class="job-detail" style="margin-top: 15px;">
                    <li class="job-detail-item">
                        <div class="job-detail-start">
                            <p>{{$i->ser_data4}}</p>
                        </div>
                    </li>
                </ul>
                <div class="job-action">
                    {{-- <button class="btn btn-rounded btn-book">
                        <img src="{{ asset('front/assets/icons/heart.svg') }}" class="svg-inject svg-icon" alt="" />
                    </button> --}}

                    @if (!Auth::user())
                    <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="{{ route('login') }}">Login</a>
                    @else
                    <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="{{ route('front.service.order', $i->id) }}">Apply Now</a>
                    @endif
                </div>
            </div>
            <!-- /.job-card-component -->
        </div>
        @endforeach
        @endif
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- = /. Featured Jobs Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

<div class="container py-60 py-lg-100">
    <div class="swiper image-slider client-logo-slider mx-xl-34 mx-xxl-80">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('front/assets/client-logo-image.png') }}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('front/assets/client-logo-image.png') }}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('front/assets/client-logo-image.png') }}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('front/assets/client-logo-image.png') }}" alt="" />
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('front/assets/client-logo-image.png') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- = /. Logo Client Section = -->

{{-- End Here --}}
@endsection
