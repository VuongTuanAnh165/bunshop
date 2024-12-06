@extends('be.layout.master')
@section('title', 'Danh sách sản phẩm')
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
                <div class="text-tiny">Danh sách sản phẩm</div>
            </li>
        </ul>
    </div>
    <!-- all-category -->
    <div class="wg-box">
        <div class="flex items-center justify-between gap10 flex-wrap">
            <div class="wg-filter flex-grow">
                <div class="show">
                    <div class="text-tiny">Hiển thị</div>
                    <div class="select">
                        <select class="" disabled>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                        </select>
                    </div>
                </div>
                <form class="form-search">
                    <fieldset class="name">
                        <input type="text" placeholder="Tìm kiếm..." class="" name="keySearch" tabindex="2"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <div class="button-submit">
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <a class="tf-button style-1 w208" href="{{ route('admin.product.create') }}"><i class="icon-plus"></i>Thêm
                mới</a>
        </div>
        {{-- <div class="wg-table table-all-category">
            <ul class="table-title flex gap20 mb-14">
                <li>
                    <div class="body-title">Tên sản phẩm</div>
                </li>
                <li>
                    <div class="body-title">Icon</div>
                </li>
                <li>
                    <div class="body-title">Thời gian cập nhật</div>
                </li>
                <li>
                    <div class="body-title">Hành động</div>
                </li>
            </ul>
            <ul class="flex flex-column">
                @foreach ($data as $item)
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="{{ !empty($item->image) ? asset('storage/' . $item->image) : '' }}" alt="">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">{{ $item->name }}</a>
                            </div>
                            <div class="icon-custom">
                                @if (!empty($item->icon))
                                    <img src="{{ asset('storage/' . $item->icon) }}" alt="icon">
                                @endif
                            </div>
                            <div class="body-text">{{ $item->updated_at ?? $item->created_at }}</div>
                            <div class="list-icon-function">
                                <a href="{{ route('admin.category.edit', ['id' => $item->id]) }}">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                </a>
                                <a class="deleteDialog" href="javascript:void(0);" data-id="{{$item->id}}">
                                    <div class="item trash">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div> --}}
        <div class="divider"></div>
        <div class="flex items-center justify-between flex-wrap gap10">
            <div class="text-tiny">Hiển thị 10 danh mục</div>
            {{ $data->links('common.component.pagination') }}
        </div>
    </div>
    <!-- /all-category -->
@stop
@section('addjs')
    @include('be.product.script')
@stop
