<header class="header-area">

    {{-- TOP BAR --}}
    <div class="header-top-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="top-info">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@tercumllc.com">info@tercumllc.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+16892265660">+1 (689) 226-6560</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 d-none d-md-block text-right">
                    {{-- reserved for future --}}
                </div>

            </div>
        </div>
    </div>

    {{-- MAIN NAV --}}
    <div class="header-menu-area main-navbar">
        <div class="container">
            <div class="row align-items-center">

                {{-- LOGO --}}
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="{{ url(app()->getLocale()) }}">
                            <img
                                src="{{ asset('assets/transland/images/logo/tercum-logo.png') }}"
                                alt="Tercum LLC"
                                class="site-logo"
                            >
                        </a>
                    </div>
                </div>

                {{-- NAV --}}
                <div class="col-lg-9 col-md-8 col-6">
                    <div class="main-menu text-right">
                        <nav>
                            <ul class="navigation">
                                <li class="{{ request()->is(app()->getLocale()) ? 'active' : '' }}">
                                    <a href="{{ url(app()->getLocale()) }}">Home</a>
                                </li>
                                <li class="{{ request()->is(app()->getLocale().'/about') ? 'active' : '' }}">
                                    <a href="{{ url(app()->getLocale().'/about') }}">About</a>
                                </li>
                                <li class="{{ request()->is(app()->getLocale().'/services') ? 'active' : '' }}">
                                    <a href="{{ url(app()->getLocale().'/services') }}">Services</a>
                                </li>
                                <li class="{{ request()->is(app()->getLocale().'/contact') ? 'active' : '' }}">
                                    <a href="{{ url(app()->getLocale().'/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
