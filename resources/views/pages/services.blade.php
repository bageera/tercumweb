@extends('layouts.app')

@section('title', 'Services | Tercum LLC')

@section('meta_description', 'Integrated maritime, logistics, air freight, procurement, architectural, and planning services supporting complex, compliance-driven operations worldwide.')

@section('content')

{{-- BREADCRUMB --}}
@include('partials.breadcrumb', [
    'title' => 'Services',
    'current' => 'Our Capabilities'
])

{{-- SERVICES HERO --}}
<section class="services-hero-area pt-100 pb-70">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <span class="sub-title">What We Do</span>
                <h1>Logistics, Maritime, & Infrastructure Services</h1>
                <p>
                    Tercum LLC delivers integrated services spanning maritime operations,
                    freight transportation, procurement, and infrastructure planning.
                    Our work supports organizations operating in complex, regulated,
                    and mission-critical environments.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES OVERVIEW --}}
@include('partials.services-expanded')

{{-- VALUE STATEMENT --}}
<section class="about-area pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="sub-title">How We Deliver</span>
                <h2>Built for Complex Operating Environments</h2>
                <p>
                    Our services are designed to support maritime, logistics, transportation,
                    and development initiatives where coordination, compliance, and
                    accountability are essential. We combine disciplined program management
                    with operational expertise to ensure projects move forward efficiently
                    from planning through execution.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- OPERATIONAL APPROACH --}}
<section class="about-area pt-80 pb-80 bg-f4f6fc">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-content">
                    <span>Our Approach</span>
                    <h2>Structured. Coordinated. Accountable.</h2>
                    <p>
                        We take a structured approach to managing logistics and infrastructure
                        initiatives, coordinating stakeholders, suppliers, and service
                        providers while maintaining visibility and control throughout execution.
                    </p>
                    <ul class="about-list">
                        <li>End-to-end logistics and freight coordination</li>
                        <li>Air, maritime, and multimodal transportation support</li>
                        <li>Procurement and sourcing for operational requirements</li>
                        <li>Architectural and planning support for infrastructure projects</li>
                        <li>Clear communication, reporting, and risk management</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <span>Who We Support</span>
                    <h2>Serving Public and Private Sector Clients</h2>
                    <p>
                        Tercum LLC supports commercial enterprises, government agencies,
                        and development-focused organizations operating across domestic
                        and international markets.
                    </p>
                    <p>
                        Our work spans transportation networks, ports, logistics facilities,
                        urban environments, and infrastructure systems — delivering practical,
                        compliant solutions tailored to real-world operating conditions.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- TRUSTED PARTNERS --}}
@include('partials.trusted-partners')

{{-- CALL TO ACTION --}}
@include('partials.cta', [
    'text' => 'Looking for a trusted partner for maritime, logistics, or infrastructure initiatives?',
    'buttonText' => 'Contact Our Team'
])

@endsection
