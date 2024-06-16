@extends('front.layouts.master')

@section('class_name_body', 'page__joblist')

@section('content')
{{-- Start Here --}}

<div class="container-xxl">
    <div class="row">
        <div class="col-12 col-lg-6 my-34 my-lg-80 my-xl-120 my-xxl-180 order-2 order-lg-1">
            <h1 class="heading-header-1 mb-0">Find your dream jobs through <span class="text-primary">Ziro</span> easily</h1>
            <!-- /.heading-header -->

            <form class="ms-auto mt-60" role="search" action="#" method="get">
                <div class="form-btn-inner shadow-2 rounded-pill">
                    <input class="form-control" type="search" placeholder="Search here..." />
                    <button class="btn btn-primary fw-semiBold py-12 px-20 px-lg-34 flex-nofill shadow-none" type="submit">Search Job</button>
                </div>
            </form>
            <!-- /.search-job-form -->

            <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-34 gap-12">
                <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Web Dev</a>
                <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Mobile Dev</a>
                <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Design</a>
                <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Writing</a>
                <a href="#" class="d-none d-md-inline-block btn btn-suggestion fw-medium rounded-pill shadow-none">Admin Support</a>
                <a href="#" class="d-none d-md-inline-block btn btn-suggestion fw-medium rounded-pill shadow-none">Customer Service</a>
                <a href="#" class="d-none d-md-inline-blockbtn btn-suggestion fw-medium rounded-pill shadow-none">Marketing</a>
                <a href="#" class="d-none d-md-inline-block btn btn-suggestion fw-medium rounded-pill shadow-none">Accounting</a>
                <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">View all categories</a>
            </div>
            <!-- /.search-suggestion -->
        </div>
        <!-- /.col -->

        <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="position-relative h-lg-100">
                <img src="{{asset('front/assets/pages/joblist/header/heroImage.png')}}" class="hero-image-img" alt="" />
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- = /. Header Section = -->

<div class="mt-43"></div>
<!-- = /. Gap Section = -->

<div class="container-xxl">
    <div class="d-flex flex-column flex-xl-row align-items-xl-center gap-20">
        <h4 class="heading-section-4 text-dark mb-0">Showing {{count($sps)}} Services</h4>
        <!-- /.heading-section -->

        {{-- <div class="d-flex flex-column flex-md-row align-items-md-center w-100 w-xl-auto ms-auto gap-15 gap-md-34">
            <div class="d-flex gap-43 py-15 overflow-auto">
                <div class="d-flex gap-25">
                    <div class="checkbox-type type-1">
                        <input class="checkbox-type-input" type="checkbox" value="" id="checkFulltime" />
                        <label class="checkbox-type-label" for="checkFulltime">
                            <div class="checkbox-type-icon">
                                <img src="{{asset('front/assets/icons/check-circle-stroke.svg')}}" class="svg-inject" alt="" />
                            </div>
                            <div class="checkbox-type-text fw-semiBold">Fulltime</div>
                        </label>
                    </div>
                    <!-- /.checkbox-filter -->

                    <div class="checkbox-type type-1">
                        <input class="checkbox-type-input" type="checkbox" value="" id="checkFreelance" checked />
                        <label class="checkbox-type-label" for="checkFreelance">
                            <div class="checkbox-type-icon">
                                <img src="{{asset('front/assets/icons/check-circle-stroke.svg')}}" class="svg-inject" alt="" />
                            </div>
                            <div class="checkbox-type-text fw-semiBold">Freelance</div>
                        </label>
                    </div>
                    <!-- /.checkbox-filter -->
                </div>

                <div class="d-flex gap-25">
                    <div class="checkbox-switch checkbox-switch-end">
                        <input class="checkbox-switch-input" type="checkbox" role="switch" id="swicthCheckDetails" />
                        <label class="checkbox-switch-label" for="swicthCheckDetails">
                            <div class="checkbox-switch"></div>
                            <div class="checkbox-switch-text fw-semiBold">Details</div>
                        </label>
                    </div>
                    <!-- /.checkbox-swicth-fillter -->

                    <div class="checkbox-switch checkbox-switch-end">
                        <input class="checkbox-switch-input" type="checkbox" role="switch" id="switchCheckSalary" checked />
                        <label class="checkbox-switch-label" for="switchCheckSalary">
                            <div class="checkbox-switch"></div>
                            <div class="checkbox-switch-text fw-semiBold">Salary</div>
                        </label>
                    </div>
                    <!-- /.checkbox-swicth-fillter -->
                </div>
            </div>

            <div class="d-flex gap-15 ms-auto">
                <button class="btn d-flex align-items-center fw-medium text-dark py-12 px-25 border border-1 border-platinum rounded-pill shadow-none">
                    Newest
                    <img src="{{asset('front/assets/icons/chevron-down.svg')}}" class="svg-inject text-primary is-20 ms-15" alt="" />
                </button>
                <!-- /.btn-newest -->

                <button class="btn btn-rounded border border-1 border-platinum shadow-none" role="button">
                    <img src="{{asset('front/assets/icons/filter.svg')}}" class="svg-inject svg-icon text-primary" alt="" />
                </button>
                <!-- /.btn-filter -->
            </div>
        </div> --}}
    </div>

    @foreach ($sps as $i)
    <div class="d-grid mt-60 gap-34">
        <div class="job-card-harizontal">
            <button class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle" type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse" aria-expanded="false" aria-controls="jobInfoCardCollapse">
                <img src="{{ asset('front/assets/icons/chevron-down.svg') }}" class="svg-inject text-primary is-16" alt="" />
            </button>
            <div class="job-info">
                <div class="job-image">
                    <img src="{{ asset('front/assets/job-logo-image-80x80.png') }}" alt="" />
                </div>
                <div class="job-info-inner">
                    <h5 class="job-title">
                        <a href="/jobdetail.html">{{$i->bdCorporate->bdcor_data1}}</a>
                    </h5>
                    <div class="job-author">
                        <a href="#">{{$i->bdCorporate->bdcor_data9}}</a>
                    </div>
                </div>
            </div>
            <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse">
                <div class="job-info-card">
                    <div class="info-card">
                        <div class="info-card-icon bg-rajah rounded-pill">
                            <img src="{{ asset('front/assets/icons/mark.svg') }}" class="svg-inject svg-icon" alt="" />
                        </div>
                        <div class="info-card-content">
                            <h6 class="info-card-title">{{$i->bdCorporate->bdcor_data11}}</h6>
                            <div class="info-card-desc">Location</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-action">
                <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill" href="{{route('front.service.show', $i->id)}}">Apply Now</a>
                <button class="btn btn-rounded btn-book">
                    <img src="{{ asset('front/assets/icons/heart.svg') }}" class="svg-inject svg-icon is-20" alt="" />
                </button>
            </div>
        </div>
        <!-- /.job-card-grid-harizontal-component -->
    </div>
    <!-- /.job-list -->
    @endforeach

    {{-- <div class="d-flex justify-content-center mt-60">
        <nav class="pagination-container" aria-label="Page navigation example">
            <a href="#" class="page-link previous">
                <img src="{{ asset('front/assets/icons/angles-left.svg') }}" class="svg-inject" alt="" />
                Previous
            </a>
            <ul class="pagination bg-lavender-web-100">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
            </ul>
            <a href="#" class="page-link next">
                Next
                <img src="{{ asset('front/assets/icons/angles-right.svg') }}" class="svg-inject" alt="" />
            </a>
        </nav>
    </div> --}}
    <!-- /.job-list-pagination -->
</div>
<!-- /.container -->
<!-- = /. Job List Section = -->

<div class="mt-80"></div>
<!-- = /. Gap Section = -->

<div class="border-top border-alice-blue"></div>
<!-- = /. Gap Border Section = -->

<div class="mt-80"></div>
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

{{-- End Here --}}
@endsection