<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('template_be/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                class="desktop-logo">
            <img src="{{ asset('template_be/assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                class="toggle-logo">
            <img src="{{ asset('template_be/assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                class="desktop-dark">
            <img src="{{ asset('template_be/assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                class="toggle-dark">
            <img src="{{ asset('template_be/assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                class="desktop-white">
            <img src="{{ asset('template_be/assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                class="toggle-white">
        </a>
    </div>
    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                @include('be.home.nav')
                @include('be.category.nav')
                @include('be.product.nav')
            </ul>
        </nav>
    </div>
</aside>