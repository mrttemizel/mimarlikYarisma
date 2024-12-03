<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | Antalya Bilim University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('backend/my-image/favicon.png')}}">

    <!-- LOAD CSS FILES -->


    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/import-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bg-image.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/rev-settings.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('frontend/switcher/demo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/switcher/colors/blue.css') }}" type="text/css" id="colors">
    @yield('css')
</head>

<body>
<!-- Preload images start //-->
<div class="images-preloader" id="images-preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Preload images end //-->

<div id="wrapper">

    <!-- header begin -->
    @include('frontend.components.header')
    <!-- header close -->
    <div class="gray-line"></div>


    @yield('content')


    <!-- footer begin -->
    @include('frontend.components.footer')
    <!-- footer close -->

</div>

<a id="to-the-top" ><i class="fa fa-angle-up"></i></a>

<!-- LOAD JS FILES -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/easing.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

<!-- Waypoints-->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/sticky.min.js') }}"></script>
<script src="{{ asset('frontend/js/tipper.js') }}"></script>
<script src="{{ asset('frontend/js/compact.js') }}"></script>
<script src="{{ asset('frontend/js/custom-index1.js') }}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/js/revslider-custom.js') }}"></script>

@yield('js')


</body>
</html>
