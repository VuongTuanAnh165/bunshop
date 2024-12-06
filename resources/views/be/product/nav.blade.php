{{-- @dd(App\Helpers\Common::asideActive(config('routes.admin.category.list'))) --}}
<li class="menu-item has-children {{ App\Helpers\Common::asideActive(config('routes.admin.product.list')) }}">
    <a href="javascript:void(0);" class="menu-item-button">
        <div class="icon"><i class="icon-shopping-cart"></i></div>
        <div class="text">Sản phẩm</div>
    </a>
    <ul class="sub-menu">
        <li class="sub-menu-item">
            <a href="{{ route('admin.product.index') }}"
                class="{{ App\Helpers\Common::asideActive(config('routes.admin.product.index')) }}">
                <div class="text">Danh sách</div>
            </a>
        </li>
        <li class="sub-menu-item">
            <a href="{{ route('admin.product.create') }}"
                class="{{ App\Helpers\Common::asideActive(config('routes.admin.product.create')) }}">
                <div class="text">Thêm mới</div>
            </a>
        </li>
    </ul>
</li>
