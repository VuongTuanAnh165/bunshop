@extends('be.layout.master')
@section('title', 'Chỉnh sửa sản phẩm')
@section('content')
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Sản phẩm</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="{{ route('admin.home.index') }}">
                    <div class="text-tiny">Trang chủ</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <div class="text-tiny">Sản phẩm</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Chỉnh sửa sản phẩm</div>
            </li>
        </ul>
    </div>
    <!-- new-category -->
    @include('be.product.form', [
        'action' => route('admin.product.update', ['id' => $data->id]),
        'data' => $data
    ])
    <!-- /new-category -->
@stop
@section('addjs')
    @include('be.product.script')
@stop
