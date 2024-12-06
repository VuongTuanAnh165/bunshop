@extends('be.layout.master')
@section('title', 'Chỉnh sửa danh mục')
@section('content')
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Danh mục</h3>
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
                    <div class="text-tiny">Danh mục</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Chỉnh sửa danh mục</div>
            </li>
        </ul>
    </div>
    <!-- new-category -->
    <div class="wg-box">
        @include('be.category.form', [
            'action' => route('admin.category.update', ['id' => $data->id]),
            'data' => $data
        ])
    </div>
    <!-- /new-category -->
@stop
@section('addjs')
    @include('be.category.script')
@stop
