@extends('front.layouts.master')

@section('class_name_body', 'page__homepage')

@section('content')
{{-- Start Here --}}


@include('front.homepage.sections.header.index')
<!-- = /. Header Section = -->

@include('front.homepage.sections.slide-one.index')
<!-- = /. Slide One Section = -->

<div class="mt-43"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.how-it-works.index')
<!-- /.container -->
<!-- = /. How It Work Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.why-us.index')
<!-- /.container -->
<!-- = /. Why Us Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.featured.profile.index')
<!-- /.container -->
<!-- = /. Featured Profile Slider Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.featured.jobs.index')
<!-- /.container -->
<!-- = /. Featured Jobs Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.testimonial.index')
<!-- /.container -->
<!-- = /. Testimonial Section = -->

<div class="mt-xl-60"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.counter.index')
<!-- /.container -->
<!-- = /. Counter Section = -->

<div class="mt-xl-60"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.pricing.index')
<!-- /.container -->
<!-- = /. Pricing Plan Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->

@include('front.homepage.sections.blog.index')
<!-- = /. Blog Slider Section = -->

<div class="mt-xl-43"></div>
<!-- = /. Gap Section = -->


{{-- End Here --}}
@endsection