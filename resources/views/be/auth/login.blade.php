<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập trang quản lý</title>

    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('template_be/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon" />
    <script src="{{ asset('template_be/assets/js/authentication-main.js') }}"></script>
    <link id="style" href="{{ asset('template_be/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template_be/assets/css/styles.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('template_be/assets/css/icons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}" rel="stylesheet" />

</head>

<body class="body">

    <div class="error-page">
        <div class="container ">
            <div class=" row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="card custom-card mt-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-center mb-3">
                                <a href="index.html">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                        class="desktop-dark">
                                </a>
                            </div>
                            <p class="h5 fw-semibold mb-2 text-center">Đăng nhập vào tài khoản</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Nhập email và mật khẩu để đăng nhập
                            </p>
                            <form action="{{ route('admin.post.login') }}" method="POST" class="row gy-3">
                                {{ csrf_field() }}
                                <div class="col-xl-12">
                                    <label for="email" class="form-label text-default">Địa chỉ email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" id="email"
                                        placeholder="Nhập địa chỉ email của bạn" required>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="password" class="form-label text-default d-block">Password<a href=""
                                            class="float-end text-danger">Quên mật khẩu ?</a></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg" id="password"
                                            name="password" placeholder="Nhập mật khẩu của bạn">
                                        <button class="btn btn-light" type="button"
                                            onclick="createpassword('password',this)" id="button-addon2"><i
                                                class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Remember password ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Sign In</button>
                                </div>
                            </form>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button class="btn btn-icon btn-light">
                                    <i class="ri-facebook-line fw-bold text-dark op-7"></i>
                                </button>
                                <button class="btn btn-icon btn-light">
                                    <i class="ri-google-line fw-bold text-dark op-7"></i>
                                </button>
                                <button class="btn btn-icon btn-light">
                                    <i class="ri-twitter-line fw-bold text-dark op-7"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="{{ asset('template_be/assets/js/custom-switcher.min.js') }}"></script>
    <script src="{{ asset('template_be/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_be/assets/js/show-password.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    @if (session('success') || session('error'))
    @include('common.script.toastr')
    @endif
</body>

</html>