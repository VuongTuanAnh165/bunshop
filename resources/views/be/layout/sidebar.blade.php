<div class="section-menu-left">
    <div class="box-logo">
        <a href="index.html" id="site-logo-inner">
            <img class="" id="logo_header" alt="" src="{{ asset('template_be/images/logo/logo.png') }}"
                data-light="{{ asset('template_be/images/logo/logo.png') }}"
                data-dark="{{ asset('template_be/images/logo/logo-dark.png') }}">
        </a>
        <div class="button-show-hide">
            <i class="icon-menu-left"></i>
        </div>
    </div>
    <div class="center">
        <div class="center-item">
            <ul class="menu-list">
                @include('be.home.nav')
                @include('be.category.nav')
            </ul>
        </div>
    </div>
    <div class="bot text-center">
        <div class="wrap">
            <div class="mb-20">
                <img src="{{ asset('template_be/images/menu-left/img-bot.png') }}" alt="">
            </div>
            <div class="mb-20">
                <h6>Hi, how can we help?</h6>
                <div class="text">Contact us if you have any assistance, we will contact you as soon as possible
                </div>
            </div>
            <a href="#" class="tf-button w-full">Contact</a>
        </div>
    </div>
</div>
