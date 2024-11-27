{{-- @dd(App\Helpers\Common::asideActive(config('routes.admin.category.list'))) --}}
<li class="menu-item has-children {{ App\Helpers\Common::asideActive(config('routes.admin.category.list')) }}">
    <a href="javascript:void(0);" class="menu-item-button">
        <div class="icon"><i class="icon-layers"></i></div>
        <div class="text">Danh mục</div>
    </a>
    <ul class="sub-menu">
        <li class="sub-menu-item">
            <a href="{{ route('admin.category.index') }}"
                class="{{ App\Helpers\Common::asideActive(config('routes.admin.category.index')) }}">
                <div class="text">Danh sách</div>
            </a>
        </li>
        <li class="sub-menu-item">
            <a href="{{ route('admin.category.create') }}"
                class="{{ App\Helpers\Common::asideActive(config('routes.admin.category.create')) }}">
                <div class="text">Thêm mới</div>
            </a>
        </li>
    </ul>
</li>
