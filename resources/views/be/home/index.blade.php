@extends('be.layout.master')
@section('title', 'Trang quản lý')
@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Trang chủ</h1>
</div>
<!-- Page Header Close -->

<!-- Start::row-1 -->
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class=" mb-0">Total Purchase</p>
                        <h3 class="mb-1">$5,383</h3>
                    </div>
                    <div class="ms-auto text-end">
                        <div class="avatar avatar-lg bg-secondary-transparent avatar-rounded">
                            <i class="fe fe-shopping-bag"></i>
                        </div>
                    </div>
                </div>
                <small class="mb-0 text-muted"><i class="ti ti-arrow-narrow-down text-danger fw-bold "></i>20% <span
                        class="ms-2">This Month</span>
                    <span class="float-end text-muted"><i class="ti ti-arrow-narrow-up text-success fw-bold"></i>22%
                        <span class="ms-2">Last Month</span></span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class=" mb-0">Total Orders</p>
                        <h3 class="mb-1">65,356</h3>
                    </div>
                    <div class="ms-auto text-end">
                        <div class="avatar avatar-lg bg-info-transparent avatar-rounded">
                            <i class="fe fe-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <small class="mb-0 text-muted"><i class="ti ti-arrow-narrow-down text-danger fw-bold "></i>26% <span
                        class="ms-2">This Month</span>
                    <span class="float-end text-muted"><i class="ti ti-arrow-narrow-up text-success fw-bold"></i>29%
                        <span class="ms-2">Last Month</span></span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class=" mb-0">Total Profit</p>
                        <h3 class="mb-1">77,356</h3>
                    </div>
                    <div class="ms-auto text-end">
                        <div class="avatar avatar-lg bg-success-transparent avatar-rounded">
                            <i class="fe fe-dollar-sign"></i>
                        </div>
                    </div>
                </div>
                <small class="mb-0 text-muted"><i class="ti ti-arrow-narrow-down text-danger fw-bold "></i>16% <span
                        class="ms-2">This Month</span>
                    <span class="float-end text-muted"><i class="ti ti-arrow-narrow-up text-success fw-bold"></i>15%
                        <span class="ms-2">Last Month</span></span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <p class=" mb-0">Total Customers</p>
                        <h3 class="mb-1">5,110</h3>
                    </div>
                    <div class="ms-auto text-end">
                        <div class="avatar avatar-lg bg-danger-transparent avatar-rounded">
                            <i class="fe fe-users"></i>
                        </div>
                    </div>
                </div>
                <small class="mb-0 text-muted"><i class="ti ti-arrow-narrow-down text-danger fw-bold "></i>32% <span
                        class="ms-2">This Month</span>
                    <span class="float-end text-muted"><i class="ti ti-arrow-narrow-up text-success fw-bold"></i>19%
                        <span class="ms-2">Last Month</span></span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-xxl-3  col-md-6 col-sm-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <div class="card-title">
                    Latest Updates
                </div>
            </div>
            <div class="card-body">
                <div class="analytics-timeline">
                    <ul class="timeline-1 mb-0">
                        <li class="mt-0">
                            <i class="bx bx-wallet-alt analytics-icon bg-danger-transparent text-danger"></i>
                            <span class="fw-semibold mb-4 fs-14 ">Total Sales</span>
                            <a href="javascript:void(0);" class="float-end fs-12 text-muted">3 days ago</a>
                            <p class="mb-0 text-muted fs-13">23,89k New Sales</p>
                        </li>
                        <li class="mt-0">
                            <i class="bx bx-cube-alt analytics-icon bg-warning-transparent text-warning"></i>
                            <span class="fw-semibold mb-4 fs-14 ">Total Products</span>
                            <a href="javascript:void(0);" class="float-end fs-12 text-muted">1 day ago</a>
                            <p class="mb-0 text-muted fs-13">1.3k New Products</p>
                        </li>
                        <li class="mt-0">
                            <i class="bx bx-money analytics-icon bg-pink-transparent text-pink"></i>
                            <span class="fw-semibold mb-4 fs-14 ">Total Incom</span>
                            <a href="javascript:void(0);" class="float-end fs-12 text-muted">2 week ago</a>
                            <p class="mb-0 text-muted fs-13">983k New Incom</p>
                        </li>
                        <li class="mt-0">
                            <i class="bx bx-money-withdraw analytics-icon bg-success-transparent text-success"></i>
                            <span class="fw-semibold mb-4 fs-14 ">Total Revenue</span>
                            <a href="javascript:void(0);" class="float-end fs-12 text-muted">5 days ago</a>
                            <p class="mb-0 text-muted fs-13">187k New Revenue</p>
                        </li>
                        <li class="mt-0">
                            <i class="bx bx-bullseye analytics-icon bg-primary-transparent text-primary"></i>
                            <span class="fw-semibold mb-4 fs-14 ">Total Visits</span>
                            <a href="javascript:void(0);" class="float-end fs-12 text-muted">1 hour ago</a>
                            <p class="text-muted fs">15% increased</p>
                        </li>
                        <li class="my-0">
                            <i class="bx bx-download analytics-icon bg-info-transparent text-info"></i>
                            <span class="fw-semibold mb-4 fs-14 ">Total profit</span>
                            <a href="javascript:void(0);" class="float-end fs-12 text-muted">1 week ago</a>
                            <p class="mb-0 text-muted fs-13">13k New profit</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6  col-md-6">
        <div class="card custom-card">
            <div class="card-header  justify-content-between">
                <div class="card-title">Sales Statistics</div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu mb-0" role="menu">
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="earnings"></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6 ">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Top Countries By Sales
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted"
                        data-bs-toggle="dropdown">
                        <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0">
                        <tbody class="top-selling">
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex mt-1">
                                        <span class="avatar avatar-xs  text-default">
                                            <img src="../assets/images/flags/us_flag.jpg" alt="">
                                        </span>
                                        <span class="ms-2 fs-14 fw-semibold mb-0">United States</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$15,091.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex mt-1">
                                        <span class="avatar avatar-xs  text-default">
                                            <img src="../assets/images/flags/india_flag.jpg" alt="">
                                        </span>
                                        <span class="ms-2 fs-14 fw-semibold mb-0">India</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$14,091.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex mt-1">
                                        <span class="avatar avatar-xs  text-default">
                                            <img src="../assets/images/flags/argentina_flag.jpg" alt="">
                                        </span>
                                        <span class="ms-2 fs-14 fw-semibold mb-0">Argentina</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$64,091.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex mt-1">
                                        <span class="avatar avatar-xs  text-default">
                                            <img src="../assets/images/flags/canada_flag.jpg" alt="">
                                        </span>
                                        <span class="ms-2 fs-14 fw-semibold mb-0">Canada</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$23,981.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex mt-1">
                                        <span class="avatar avatar-xs  text-default">
                                            <img src="../assets/images/flags/russia_flag.jpg" alt="">
                                        </span>
                                        <span class="ms-2 fs-14 fw-semibold mb-0">Russia</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$12,333.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="">
                                        <div class="d-inline-flex mt-1">
                                            <span class="avatar avatar-xs  text-default">
                                                <img src="../assets/images/flags/spain_flag.jpg" alt="">
                                            </span>
                                            <span class="ms-2 fs-14 fw-semibold mb-0">Spain</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$87,987.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="">
                                        <div class="d-inline-flex mt-1">
                                            <span class="avatar avatar-xs  text-default">
                                                <img src="../assets/images/flags/mexico_flag.jpg" alt="">
                                            </span>
                                            <span class="ms-2 fs-14 fw-semibold mb-0">Mexico</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$32,543.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-5  col-md-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between border-bottom-0">
                <div class="card-title">
                    Top Selling Products
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted"
                        data-bs-toggle="dropdown">
                        <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu mb-0">
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap table-hover border table-bordered">
                        <thead class="border-top">
                            <tr>
                                <th class="border-bottom-0 ps-4">Product Name</th>
                                <th class="border-bottom-0">stock</th>
                                <th class="border-bottom-0">Price</th>
                                <th class="border-bottom-0">Sold</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
                                <td class=" ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="../assets/images/ecommerce/jpg/6.jpg" alt="avatar"
                                                class="rounded-1">
                                        </div>
                                        <a href="product-details.html">Sports Shoes For Men</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-success-transparent text-success">In Stock</span>
                                    </div>
                                </td>
                                <td> $73.800</td>
                                <td>1,534</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class=" ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="../assets/images/ecommerce/jpg/1.jpg" alt="avatar"
                                                class="rounded-1">
                                        </div>
                                        <a href="product-details.html">Mobile Phone</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-success-transparent text-success">In Stock</span>
                                    </div>
                                </td>
                                <td> $73.800</td>
                                <td>1,534</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class=" ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="../assets/images/ecommerce/jpg/5.jpg" alt="avatar"
                                                class="rounded-1">
                                        </div>
                                        <a href="product-details.html">Beautiful flower Frame</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-info-transparent text-info">Few-left</span>
                                    </div>
                                </td>
                                <td> $73.800</td>
                                <td>4,987</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class=" ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="../assets/images/ecommerce/jpg/3.jpg" alt="avatar"
                                                class="rounded-1">
                                        </div>
                                        <a href="product-details.html">Small Alaram Watch</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-danger-transparent text-danger">Out Of Stock</span>
                                    </div>
                                </td>
                                <td> $13.800</td>
                                <td>87,875</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class=" ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="../assets/images/ecommerce/jpg/4.jpg" alt="avatar"
                                                class="rounded-1">
                                        </div>
                                        <a href="product-details.html">Black colord lens cemara</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-success-transparent text-success">In Stock</span>
                                    </div>
                                </td>
                                <td> $14.600</td>
                                <td>98,876</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class=" ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm me-2">
                                            <img src="../assets/images/ecommerce/jpg/2.jpg" alt="avatar"
                                                class="rounded-1">
                                        </div>
                                        <a href="product-details.html"> Black colored Headset</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-info-transparent text-info">Few-left</span>
                                    </div>
                                </td>
                                <td> $23.800</td>
                                <td>1,987</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6 ">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Top Customers
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted"
                        data-bs-toggle="dropdown">
                        <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0">
                        <tbody class="top-selling">
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex align-items-center">
                                        <span class="avatar  text-default">
                                            <img src="../assets/images/faces/4.jpg" alt="">
                                        </span>
                                        <div class="ms-2">
                                            <p class="mb-0 fs-14 fw-semibold mb-0">Alian Gorger</p>
                                            <small class="fs-12 text-muted mb-0">United States</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$15,091.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex align-items-center">
                                        <span class="avatar  text-default">
                                            <img src="../assets/images/faces/3.jpg" alt="">
                                        </span>
                                        <div class="ms-2">
                                            <p class="mb-0 fs-14 fw-semibold mb-0">Gorger Mullin</p>
                                            <small class="fs-12 text-muted mb-0">United Kingdom</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$76,091.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex align-items-center">
                                        <span class="avatar  text-default">
                                            <img src="../assets/images/faces/7.jpg" alt="">
                                        </span>
                                        <div class="ms-2">
                                            <p class="mb-0 fs-14 fw-semibold mb-0">Allien Werret</p>
                                            <small class="fs-12 text-muted mb-0">France</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$86,987.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex align-items-center">
                                        <span class="avatar  text-default">
                                            <img src="../assets/images/faces/2.jpg" alt="">
                                        </span>
                                        <div class="ms-2">
                                            <p class="mb-0 fs-14 fw-semibold mb-0"> Archee Worn</p>
                                            <small class="fs-12 text-muted mb-0">Germany</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$99,007.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-inline-flex align-items-center">
                                        <span class="avatar  text-default">
                                            <img src="../assets/images/faces/1.jpg" alt="">
                                        </span>
                                        <div class="ms-2">
                                            <p class="mb-0 fs-14 fw-semibold mb-0"> Gemenny Alin</p>
                                            <small class="fs-12 text-muted mb-0">Australia</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <span class="fw-semibold fs-14">$26,107.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-md-6">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Total Sales By Categories
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="me-2">
                        <span class="avatar bg-info"><i class="ti ti-cash fs-18"></i></span>
                    </div>
                    <div class="flex-1">
                        <h3 class="mb-0">73,390</h3>
                        <span>Total Sales</span>
                    </div>
                </div>
                <div class="progress-stacked mb-2">
                    <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="45"
                        aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                        <div class="progress-bar bg-primary"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        <div class="progress-bar bg-secondary"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <div class="progress-bar bg-success"></div>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="d-flex align-items-center"><i
                            class="ri-record-circle-fill text-primary fs-15 me-2"></i>Electronics</span>
                    <span class="d-flex align-items-center mx-sm-3"><i
                            class="ri-record-circle-fill text-secondary fs-15 me-2"></i>Fashion</span>
                    <span class="d-flex align-items-center"><i
                            class="ri-record-circle-fill text-success fs-15 me-2"></i>Others</span>
                </div>
            </div>
        </div>
        <div class="card custom-card">
            <div class="card-body">
                <h6 class="mb-4">Total Expenses</h6>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <p class="text-muted fs-12 mb-0">Monthly</p>
                        <h3 class="fw-semibold">78,789.00</h3>
                        <span class="d-block text-success fs-12">+0.892 <i class="ti ti-trending-up ms-1"></i></span>
                    </div>
                    <div id="analytics-visitors"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End::row-1 -->

<!--Start::Row-2-->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Oreder Summary
                </div>
                <div class="d-flex">
                    <div class="me-3">
                        <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                            aria-label=" example">
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-wave waves-effect waves-light"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Transaction Id</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date</th>
                                <th scope="col">Payment method</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-sm">
                                                <img src="../assets/images/ecommerce/jpg/3.jpg" alt=""
                                                    class="rounded-1">
                                            </span>
                                        </div>
                                        <div class="fs-14">Small alaram watch</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-semibold">#1902-9883</span>
                                </td>
                                <td>
                                    $99.99
                                </td>
                                <td>
                                    <span class="">02-03-2023</span>
                                </td>
                                <td>
                                    <span class="">Cash On Delivery</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger-transparent">Canceld</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-sm">
                                                <img src="../assets/images/ecommerce/jpg/5.jpg" alt=""
                                                    class="rounded-1">
                                            </span>
                                        </div>
                                        <div class="fs-14">Beautiful flower Frame</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-semibold">#1962-9033</span>
                                </td>
                                <td>
                                    $199.99
                                </td>
                                <td>
                                    <span class="">03-02-2023</span>
                                </td>
                                <td>
                                    <span class="">Cash On Delivery</span>
                                </td>
                                <td>
                                    <span class="badge bg-primary-transparent">Shipped</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-sm">
                                                <img src="../assets/images/ecommerce/jpg/4.jpg" alt=""
                                                    class="rounded-1">
                                            </span>
                                        </div>
                                        <div class="fs-14">Black colord lens cemara</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-semibold">#8745-1232</span>
                                </td>
                                <td>
                                    $79.00
                                </td>
                                <td>
                                    <span class=""> 01-03-2023</span>
                                </td>
                                <td>
                                    <span class="">Online</span>
                                </td>
                                <td>
                                    <span class="badge bg-warning-transparent">Pending</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-sm">
                                                <img src="../assets/images/ecommerce/jpg/1.jpg" alt=""
                                                    class="rounded-1">
                                            </span>
                                        </div>
                                        <div class="fs-14">Black colord Smart mobile phone</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-semibold">#1734-9743</span>
                                </td>
                                <td>
                                    $199.99
                                </td>
                                <td>
                                    <span class="">03-03-2023</span>
                                </td>
                                <td>
                                    <span class="">Online</span>
                                </td>
                                <td>
                                    <span class="badge bg-success-transparent">Delivered</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-sm">
                                                <img src="../assets/images/ecommerce/jpg/6.jpg" alt=""
                                                    class="rounded-1">
                                            </span>
                                        </div>
                                        <div class="fs-14">Sports Shoes for men</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-semibold">#1802-9883</span>
                                </td>
                                <td>
                                    $39.99
                                </td>
                                <td>
                                    <span class="">02-03-2023</span>
                                </td>
                                <td>
                                    <span class="">Cash On Delivery</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger-transparent">Canceld</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center">
                    <div>
                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                    </div>
                    <div class="ms-auto">
                        <nav aria-label="Page navigation" class="pagination-style-4">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0);">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item">
                                    <a class="page-link text-primary" href="javascript:void(0);">
                                        next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End::Row--->

@stop