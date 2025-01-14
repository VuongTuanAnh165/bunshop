<li class="slide has-sub {{ App\Helpers\Common::asideActive(config('routes.admin.category.list')) }}">
    <a href=" javascript:void(0);" class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.category.list')) }}">
    <i class="bx bx-layer side-menu__icon"></i>
    <span class="side-menu__label">Danh mục</span>
    <i class="fe fe-chevron-right side-menu__angle"></i>
    </a>
    <ul class="slide-menu child1">
        <li class="slide">
            <a href="{{ route('admin.category.index') }}"
                class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.category.index')) }}">
                Danh sách
            </a>
        </li>
        <li class="slide">
            <a href="{{ route('admin.category.create') }}"
                class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.category.create')) }}">
                Thêm mới
            </a>
        </li>
    </ul>
</li>