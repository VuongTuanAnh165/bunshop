<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="Marvelous">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template_be/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template_be/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template_be/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template_be/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template_be/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}" />
    @yield('addcss')

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('template_be/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('template_be/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('template_be/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('template_be/images/favicon.png') }}">

</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                @include('be.layout.sidebar')
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    @include('be.layout.header')
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                @yield('content')
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Bun's Shop. Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a href="https://www.facebook.com/marvelous.captain.75/">Marvelous</a> Vương Tuấn Anh.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('template_be/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template_be/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_be/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('template_be/js/zoom.js') }}"></script>
    <script src="{{ asset('template_be/js/jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('template_be/js/jvectormap-us-lcc.js') }}"></script>
    <script src="{{ asset('template_be/js/jvectormap.js') }}"></script>
    <script src="{{ asset('template_be/js/morris.min.js') }}"></script>
    <script src="{{ asset('template_be/js/raphael.min.js') }}"></script>
    <script src="{{ asset('template_be/js/morris.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-1.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-2.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-3.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-4.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-8.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-9.js') }}"></script>
    <script src="{{ asset('template_be/js/apexcharts/line-chart-10.js') }}"></script>
    <script src="{{ asset('template_be/js/switcher.js') }}"></script>
    <script src="{{ asset('template_be/js/theme-settings.js') }}"></script>
    <script src="{{ asset('template_be/js/main.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    @if (session('success') || session('error'))
        @include('common.script.toastr')
    @endif

</body>

</html>