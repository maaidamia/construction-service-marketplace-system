<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="construction service marketplace system">
    <meta name="keywords" content="construction service marketplace system">
    <meta name="author" content="maisadamia">
    <title>Login Page - CSMS</title>
    <link rel="apple-touch-icon" href="{{asset('back/app-assets/images/ico/60347.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('back/app-assets/images/ico/60347.jpg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/themes/semi-dark-layout.css')}}">

   

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/assets/css/style.css')}}">
    @yield('css-addon')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    @yield('content-auth')
    <!-- END: Content-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('back/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('back/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('back/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    {{-- JS Addon --}}
    @yield('js-addon')
    {{-- JS Addon --}}

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>