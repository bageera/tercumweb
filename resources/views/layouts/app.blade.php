<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Tercum LLC')</title>
    <meta name="description" content="@yield('meta_description', 'Maritime & Logistics Services')">
    <link rel="canonical" href="{{ url()->current() }}">

    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Tercum LLC",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/transland/images/logo.png') }}",
        "description": "Tercum LLC provides integrated logistics, maritime, procurement, architectural, and urban development services supporting complex domestic and international operations.",
        "sameAs": [
            "https://www.linkedin.com/company/tercumllc"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-555-123-4567",
            "contactType": "customer service",
            "availableLanguage": ["English", "Spanish", "French"]
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Tercum LLC",
        "image": "{{ asset('assets/transland/images/logo.png') }}",
        "url": "{{ url('/') }}",
        "priceRange": "$$",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "08:00",
            "closes": "18:00"
        }
    }
    </script>
    @endverbatim

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Transland CSS -->
    <link rel="stylesheet" href="{{ asset('assets/transland/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transland/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transland/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transland/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transland/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transland/css/polish.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/transland/css/responsive.css') }}">

    {{-- Page-specific styles --}}
    @stack('styles')
</head>

<body>

{{-- Header --}}
@include('partials.header')

{{-- Main content --}}
<main>
    @yield('content')
</main>

{{-- Footer --}}
@include('partials.footer')

<!-- Transland JS -->
<script src="{{ asset('assets/transland/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/transland/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/transland/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/transland/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/transland/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/transland/js/main.js') }}"></script>

{{-- Page-specific scripts --}}
@stack('scripts')

</body>
</html>
