<li class="slide has-sub {{ App\Helpers\Common::asideActive(config('routes.admin.product.list')) }}">
    <a href=" javascript:void(0);" class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.product.list')) }}">
    <i class="bx bx-gift side-menu__icon"></i>
    <span class="side-menu__label">Sản phẩm</span>
    <i class="fe fe-chevron-right side-menu__angle"></i>
    </a>
    <ul class="slide-menu child1">
        <li class="slide">
            <a href="{{ route('admin.product.index') }}"
                class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.product.index')) }}">
                Danh sách
            </a>
        </li>
        <li class="slide">
            <a href="{{ route('admin.product.create') }}"
                class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.product.create')) }}">
                Thêm mới
            </a>
        </li>
    </ul>
</li>