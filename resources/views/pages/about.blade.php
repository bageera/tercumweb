@extends('layouts.app')

@section('title', 'About Us | Tercum LLC')

@section('meta_description', 'Learn about Tercum LLC, a trusted provider of maritime, logistics, and management services supporting complex operations worldwide.')

@section('content')

{{-- BREADCRUMB --}}
@include('partials.breadcrumb', [
    'title' => 'About Us',
    'current' => 'Who We Are'
])

{{-- ABOUT HERO --}}
<section class="about-hero-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <span class="sub-title">About Tercum LLC</span>
                <h1>Experience. Reliability. Execution.</h1>
                <p>
                    Tercum LLC is a logistics and maritime services company focused on
                    delivering reliable, compliant, and well-managed solutions for
                    organizations operating in complex and demanding environments.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- COMPANY OVERVIEW --}}
<section class="about-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-content">
                    <span>Who We Are</span>
                    <h2>A Trusted Partner in Maritime & Logistics Operations</h2>
                    <p>
                        Tercum LLC works with commercial, government, and environmental
                        organizations to support transportation, logistics, and maritime
                        operations where reliability and accountability matter.
                    </p>
                    <p>
                        Our team brings together operational experience and disciplined
                        program management to ensure projects are delivered safely,
                        efficiently, and in alignment with regulatory and operational
                        requirements.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <span>How We Work</span>
                    <h2>Focused on Outcomes</h2>
                    <p>
                        We take a structured, hands-on approach to managing logistics and
                        maritime initiatives — coordinating suppliers, monitoring progress,
                        and maintaining clear communication throughout execution.
                    </p>
                    <ul class="about-list">
                        <li>End-to-end project and logistics management</li>
                        <li>Maritime and environmental domain expertise</li>
                        <li>Compliance-focused operational execution</li>
                        <li>Clear reporting and accountability</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="services-area bg-f4f6fc pt-80 pb-80">
    <div class="container">

        <div class="section-title text-center">
            <span>Our Values</span>
            <h2>What Guides Our Work</h2>
            <p>
                Every engagement is grounded in principles that support long-term
                partnerships and operational success.
            </p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box">
                    <h3>Reliability</h3>
                    <p>
                        We understand that our clients depend on predictable execution.
                        We plan carefully, communicate clearly, and deliver consistently.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box">
                    <h3>Accountability</h3>
                    <p>
                        We take ownership of our work and stand behind our commitments,
                        ensuring transparency and trust throughout every engagement.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box">
                    <h3>Professionalism</h3>
                    <p>
                        Our team operates with discipline, integrity, and respect for
                        regulatory, environmental, and operational requirements.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- CALL TO ACTION --}}
@include('partials.cta', [
    'text' => 'Interested in working with a dependable maritime and logistics partner?',
    'buttonText' => 'Contact Our Team'
])

@endsection
