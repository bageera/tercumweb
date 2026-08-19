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
                        <li>Maritime shipping and port coordination</li>
                        <li>Air freight coordination for priority cargo</li>
                        <li>Freight, carrier, and logistics oversight</li>
                        <li>Procurement and sourcing support</li>
                        <li>Supplier coordination and cost-control support</li>
                        <li>Architectural and project management support</li>
                        <li>Urban planning and master planning</li>
                        <li>Port, corridor, and infrastructure support</li>
                        <li>Program coordination and reporting</li>
                        <li>Risk awareness and compliance-focused execution</li>
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
                    <ul class="about-list">
                        <li>Government and public-sector organizations</li>
                        <li>Commercial enterprises and environmental organizations</li>
                        <li>Maritime and port operations</li>
                        <li>Transportation and logistics networks</li>
                        <li>Industrial, logistics, and urban infrastructure</li>
                        <li>Commercial, institutional, hospitality, and mixed-use development</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- WHY CHOOSE TERCUM --}}
<section class="about-area pt-80 pb-80">
    <div class="container">
        <div class="section-title text-center">
            <span>Why Choose Tercum</span>
            <h2>Positioned for Complex, Coordinated Work</h2>
            <p>
                Tercum is positioned for clients that need a practical coordination partner
                across logistics, maritime movement, procurement, and infrastructure support.
                The company brings a disciplined, execution-focused approach to complex work
                where timing, compliance, communication, and accountability matter.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Integrated Support</h3>
                    <p>
                        Integrated logistics, maritime, procurement, and infrastructure
                        support under a single coordination point.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Hands-On Execution</h3>
                    <p>
                        Structured, hands-on project execution from planning through
                        completion.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Compliance-Focused</h3>
                    <p>
                        Compliance-focused operations for regulated and mission-critical
                        environments.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Clear Communication</h3>
                    <p>
                        Clear communication, reporting, and accountability throughout every
                        engagement.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Public &amp; Private Sector</h3>
                    <p>
                        Public- and private-sector support experience across commercial,
                        government, and development-focused organizations.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Global Network</h3>
                    <p>
                        Global network approach using carriers, freight forwarders, and
                        logistics providers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- INDUSTRIES SERVED --}}
<section class="about-area bg-f4f6fc pt-80 pb-80">
    <div class="container">
        <div class="section-title text-center">
            <span>Industries Served</span>
            <h2>Sectors We Support</h2>
            <p>
                Tercum LLC supports organizations across transportation, infrastructure,
                and development sectors where coordination and compliance are essential.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Government &amp; Public Sector</h3>
                    <p>
                        Government and public-sector organizations requiring
                        compliance-driven coordination and reporting.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Commercial &amp; Environmental</h3>
                    <p>
                        Commercial enterprises and environmental organizations managing
                        complex operational and development requirements.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Maritime &amp; Port Operations</h3>
                    <p>
                        Maritime and port operations requiring vessel support, port
                        coordination, and logistics integration.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Transportation &amp; Logistics</h3>
                    <p>
                        Transportation and logistics networks requiring freight, carrier,
                        and multimodal coordination.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Industrial &amp; Urban Infrastructure</h3>
                    <p>
                        Industrial, logistics, and urban infrastructure projects requiring
                        planning, architectural, and development support.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Commercial Development</h3>
                    <p>
                        Commercial, institutional, hospitality, residential, and mixed-use
                        development projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- COMPANY CREDENTIALS --}}
<section class="about-area pt-80 pb-80">
    <div class="container">
        <div class="section-title text-center">
            <span>Company Data</span>
            <h2>Credentials &amp; Certifications</h2>
            <p>
                Verified company data and certifications supporting government and
                commercial contracting requirements.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>UEI</h3>
                    <p>H2TYWW59GZN6</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>CAGE</h3>
                    <p>22CU7</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>SAM.gov</h3>
                    <p>Active</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>Socio-Economic</h3>
                    <p>Minority-Owned Business</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="single-services-box">
                    <h3>NAICS Codes</h3>
                    <p>
                        Primary: 488510<br>
                        Additional: 237120, 484121, 488999
                    </p>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="single-services-box">
                    <h3>Certifications</h3>
                    <p>
                        ISO 37001 (Anti-Bribery Management Systems),
                        ISO 20400 (Sustainable Procurement),
                        ISO 45001 (Occupational Health &amp; Safety).
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
