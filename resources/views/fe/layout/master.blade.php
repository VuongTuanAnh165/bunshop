<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template_fe/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('template_fe/assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template_fe/assets/css/main.css?v=6.0') }}" />
    @yield('addcss')
</head>

<body>
    @include('fe.layout.header')
    @yield('content')
    @include('fe.layout.footer')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('template_fe/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('template_fe/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('template_fe/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('template_fe/assets/js/main.js?v=6.0') }}"></script>
    <script src="{{ asset('template_fe/assets/js/shop.js?v=6.0') }}"></script>
    @yield('addjs')
    @if (session('success') || session('error'))
        @include('common.script.toastr')
    @endif
</body>

</html>
