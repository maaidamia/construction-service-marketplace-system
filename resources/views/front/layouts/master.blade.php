<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CSMS</title>
		<link rel="icon" type="image/x-icon" href="{{asset('front/assets/60347.jpg')}}" />

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="{{asset('front/vendors/jquery-ui/jquery-ui.min.css')}}" />
		<link rel="stylesheet" href="{{asset('front/vendors/swiper/swiper-bundle.min.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('front/dist/css/style.css')}}" />
	</head>
	<body class="@yield('class_name_body')">
		@include('front.layouts.navbar.index')
		<!-- = /. Navbar Section = -->

		<main class="main @yield('class_name_main')">
		@yield('content')
		</main>
		<!-- = /. Main Section = -->

		@include('front.layouts.footer.index')
		<!-- = /. Footer Section = -->

		<!-- Bootstrap JS -->
		<script src="{{asset('front/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Vendors -->
		<script src="{{asset('front/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
		<script src="{{asset('front/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
		<script src="{{asset('front/vendors/swiper/swiper-bundle.min.js')}}"></script>
		<script src="{{asset('front/vendors/fslightbox/fslightbox.js')}}"></script>
		<script src="{{asset('front/vendors/svg-inject/dist/svg-inject.min.js')}}"></script>

		<!-- Template Function -->
		<script src="{{asset('front/dist/js/theme.js')}}"></script>
	</body>
</html>