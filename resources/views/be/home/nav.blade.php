<li class="slide {{ App\Helpers\Common::asideActive(config('routes.admin.home')) }}">
    <a href="{{ route('admin.home.index') }}" class="side-menu__item {{ App\Helpers\Common::asideActive(config('routes.admin.home')) }}">
        <i class="ti ti-device-desktop side-menu__icon"></i>
        <span class="side-menu__label">Trang chủ</span>
    </a>
</li>