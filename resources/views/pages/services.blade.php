@extends('layouts.app')

@section('title', 'Services | Tercum LLC')

@section('meta_description', 'Comprehensive maritime, logistics, and management services delivering compliant, technology-driven solutions for complex operations worldwide.')

@section('content')

{{-- BREADCRUMB --}}
@include('partials.breadcrumb', [
    'title' => 'Services',
    'current' => 'Our Capabilities'
])

{{-- SERVICES HERO --}}
<section class="services-hero-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <span class="sub-title">What We Do</span>
                <h1>Maritime, Logistics & Management Services</h1>
                <p>
                    Tercum LLC delivers integrated maritime and logistics solutions designed
                    to manage complexity, ensure compliance, and support mission-critical
                    operations from planning through execution.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES OVERVIEW --}}
@include('partials.services-overview')


{{-- VALUE STATEMENT --}}
<section class="about-area pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2>Built for Complex Operating Environments</h2>
                <p>
                    Our services are designed for organizations operating in demanding
                    maritime and logistics environments where reliability, visibility,
                    and accountability are critical. We combine experienced program
                    management with advanced maritime technology to deliver solutions
                    that perform in real-world conditions.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- TRUSTED PARTNERS --}}
@include('partials.trusted-partners')

{{-- CALL TO ACTION --}}
@include('partials.cta', [
    'text' => 'Looking for a trusted partner in complex maritime and logistics operations?',
    'buttonText' => 'Contact Our Team'
])

@endsection