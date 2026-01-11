@php
    // Brochure-aligned service definitions (safe defaults)
    $services = $services ?? [
        [
            'title' => 'Program & Management Services',
            'description' =>
                'Project planning, lifecycle management, and supplier coordination to deliver turnkey maritime and logistics solutions from initial concept through operational handoff.',
            'image' => 'assets/transland/images/service/service1.jpg',
            'link' => url(app()->getLocale().'/contact'),
        ],
        [
            'title' => 'Maritime Monitoring & Environmental Intelligence',
            'description' =>
                'Advanced systems for monitoring aquatic habitats, marine life populations, and environmental conditions to support compliance, sustainability, and situational awareness.',
            'image' => 'assets/transland/images/service/service2.jpg',
            'link' => url(app()->getLocale().'/contact'),
        ],
        [
            'title' => 'Pollution Detection & Evidence Collection',
            'description' =>
                'Real-time detection of hydrocarbons, waste, and other pollutants, providing actionable data and evidentiary records for response, enforcement, and long-term monitoring.',
            'image' => 'assets/transland/images/service/service3.jpg',
            'link' => url(app()->getLocale().'/contact'),
        ],
        [
            'title' => 'Maritime Communications & Domain Awareness',
            'description' =>
                'Extended communications and surveillance capabilities that maintain connectivity and situational awareness beyond traditional shore-based coverage.',
            'image' => 'assets/transland/images/service/service4.jpg',
            'link' => url(app()->getLocale().'/contact'),
        ],
        [
            'title' => 'Surveillance & Security Solutions',
            'description' =>
                'Persistent maritime surveillance and domain awareness systems supporting government, defense, and commercial security operations in complex maritime environments.',
            'image' => 'assets/transland/images/service/service5.jpg',
            'link' => url(app()->getLocale().'/contact'),
        ],
        [
            'title' => 'Integrated Maritime Systems',
            'description' =>
                'Digital maritime fencing, surface and subsurface detection, multi-object tracking, and seamless integration into network operations centers (NOC).',
            'image' => 'assets/transland/images/service/service6.jpg',
            'link' => url(app()->getLocale().'/contact'),
        ],
    ];
@endphp

<section class="services-area pt-100 pb-70">
    <div class="container">

        <div class="section-title text-center">
            <span>Our Services</span>
            <h2>Maritime & Logistics Capabilities</h2>
            <p>
                Tercum LLC combines management expertise with advanced maritime technology
                to deliver reliable, compliant, and mission-focused solutions across
                complex operating environments.
            </p>
        </div>

        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-services-box">
                        <div class="services-image">
                            <img
                                src="{{ asset($service['image']) }}"
                                alt="{{ $service['title'] }}"
                            >
                        </div>

                        <div class="services-content">
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>

                            <a href="{{ $service['link'] }}" class="read-more">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
