<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Đăng nhập trang quản lý</title>

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
            <div class="wrap-login-page">
                <div class="flex-grow flex flex-column justify-center gap30">
                    <a href="index.html" id="site-logo-inner">

                    </a>
                    <div class="login-box">
                        <div>
                            <h3>Đăng nhập vào tài khoản</h3>
                            <div class="body-text">Nhập email và mật khẩu để đăng nhập</div>
                        </div>
                        <form action="{{ route('admin.post.login') }}" method="POST"
                            class="form-login flex flex-column gap24">
                            {{ csrf_field() }}
                            <fieldset class="email">
                                <div class="body-title mb-10">Địa chỉ email <span class="tf-color-1">*</span></div>
                                <input class="flex-grow" type="email" placeholder="Nhập địa chỉ email của bạn"
                                    name="email" tabindex="0" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="password">
                                <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                                <input class="password-input" type="password" placeholder="Nhập mật khẩu của bạn"
                                    name="password" tabindex="0" value="" aria-required="true" required>
                                <span class="show-pass">
                                    <i class="icon-eye view"></i>
                                    <i class="icon-eye-off hide"></i>
                                </span>
                            </fieldset>
                            <button type="submit" class="tf-button w-full">Đăng nhập</button>
                        </form>
                        <div>
                            <div class="text-tiny mb-16 text-center">Hoặc tiếp tục với tài khoản xã hội</div>
                            <div class="flex gap16 mobile-wrap">
                                <a href="index.html" class="tf-button style-2 w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22"
                                        viewBox="0 0 23 22" fill="none">
                                        <g clip-path="url(#clip0_604_19993)">
                                            <path
                                                d="M21.6676 9.08734L12.694 9.08691C12.2978 9.08691 11.9766 9.40806 11.9766 9.80432V12.671C11.9766 13.0672 12.2978 13.3884 12.694 13.3884H17.7474C17.194 14.8244 16.1612 16.0271 14.8435 16.7913L16.9983 20.5213C20.4548 18.5223 22.4983 15.0148 22.4983 11.0884C22.4983 10.5293 22.4571 10.1297 22.3747 9.67967C22.312 9.33777 22.0152 9.08734 21.6676 9.08734Z"
                                                fill="#167EE6" />
                                            <path
                                                d="M11.5019 17.6959C9.02885 17.6959 6.86993 16.3447 5.71041 14.3452L1.98047 16.4951C3.87861 19.7849 7.43445 22.0002 11.5019 22.0002C13.4972 22.0002 15.38 21.463 17.0019 20.5267V20.5216L14.8471 16.7915C13.8615 17.3632 12.7209 17.6959 11.5019 17.6959Z"
                                                fill="#12B347" />
                                            <path
                                                d="M17 20.5267V20.5216L14.8452 16.7915C13.8596 17.3631 12.7192 17.6959 11.5 17.6959V22.0002C13.4953 22.0002 15.3782 21.463 17 20.5267Z"
                                                fill="#0F993E" />
                                            <path
                                                d="M4.80435 10.9998C4.80435 9.78079 5.13702 8.64036 5.70854 7.65478L1.9786 5.50488C1.0372 7.12167 0.5 8.99932 0.5 10.9998C0.5 13.0002 1.0372 14.8779 1.9786 16.4947L5.70854 14.3448C5.13702 13.3592 4.80435 12.2188 4.80435 10.9998Z"
                                                fill="#FFD500" />
                                            <path
                                                d="M11.5019 4.30435C13.1145 4.30435 14.5958 4.87738 15.7529 5.83056C16.0383 6.06568 16.4532 6.04871 16.7146 5.78725L18.7458 3.75611C19.0424 3.45946 19.0213 2.97387 18.7044 2.69895C16.7658 1.0172 14.2436 0 11.5019 0C7.43445 0 3.87861 2.21534 1.98047 5.50511L5.71041 7.65501C6.86993 5.65555 9.02885 4.30435 11.5019 4.30435Z"
                                                fill="#FF4B26" />
                                            <path
                                                d="M15.751 5.83056C16.0364 6.06568 16.4513 6.04871 16.7128 5.78725L18.7439 3.75611C19.0405 3.45946 19.0194 2.97387 18.7025 2.69895C16.764 1.01716 14.2417 0 11.5 0V4.30435C13.1126 4.30435 14.594 4.87738 15.751 5.83056Z"
                                                fill="#D93F21" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_604_19993">
                                                <rect width="22" height="22" fill="white"
                                                    transform="translate(0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tf-color-3">Sign in with Google</span>
                                </a>
                                <a href="index.html" class="tf-button style-2 w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22"
                                        viewBox="0 0 23 22" fill="none">
                                        <g clip-path="url(#clip0_604_20003)">
                                            <path
                                                d="M22.5 11C22.5 16.4905 18.4773 21.0414 13.2188 21.8664V14.1797H15.7818L16.2695 11H13.2188V8.93664C13.2188 8.06652 13.645 7.21875 15.0114 7.21875H16.3984V4.51172C16.3984 4.51172 15.1395 4.29688 13.9359 4.29688C11.4235 4.29688 9.78125 5.81969 9.78125 8.57656V11H6.98828V14.1797H9.78125V21.8664C4.52273 21.0414 0.5 16.4905 0.5 11C0.5 4.92508 5.42508 0 11.5 0C17.5749 0 22.5 4.92508 22.5 11Z"
                                                fill="#1877F2" />
                                            <path
                                                d="M15.7818 14.1797L16.2695 11H13.2188V8.9366C13.2188 8.0667 13.6449 7.21875 15.0114 7.21875H16.3984V4.51172C16.3984 4.51172 15.1396 4.29688 13.9361 4.29688C11.4235 4.29688 9.78125 5.81969 9.78125 8.57656V11H6.98828V14.1797H9.78125V21.8663C10.3413 21.9542 10.9153 22 11.5 22C12.0847 22 12.6587 21.9542 13.2188 21.8663V14.1797H15.7818Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_604_20003">
                                                <rect width="22" height="22" fill="white"
                                                    transform="translate(0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tf-color-3">Sign in with Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-tiny">Copyright © 2024 Bun's Shop, Vương Tuấn Anh ~ Marvelous.</div>
            </div>
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('template_be/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template_be/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_be/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('template_be/js/main.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    @if (session('success') || session('error'))
        @include('common.script.toastr')
    @endif
</body>

</html>