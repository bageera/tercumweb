<header class="header-area">

    {{-- TOP BAR --}}
    <div class="header-top-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <ul class="top-info">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@tercumllc.com">info@tercumllc.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+16892265660">(689) 226-6560</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 text-right">
                    {{-- reserved for future --}}
                </div>

            </div>
        </div>
    </div>

    {{-- MAIN NAV --}}
    <div class="header-menu-area">
        <div class="container">
            <div class="row align-items-center">

                {{-- LOGO --}}
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="{{ url(app()->getLocale()) }}">
                            <strong>Tercum LLC</strong>
                        </a>
                    </div>
                </div>

                {{-- NAV --}}
                <div class="col-lg-9 col-md-8 col-6">
                    <div class="main-menu text-right">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ url(app()->getLocale()) }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url(app()->getLocale().'/about') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ url(app()->getLocale().'/services') }}">Services</a>
                                </li>
                                <li>
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
