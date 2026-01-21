<header class="header-area">



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
