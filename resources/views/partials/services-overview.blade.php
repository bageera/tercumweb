@php
    $services = $services ?? [
        [
            'title' => 'Maritime Shipping',
            'description' => 'Port coordination, vessel support, and maritime logistics services supporting domestic and international operations.',
            'image' => 'assets/transland/images/services/service-maritime-ops.png',
            'link' => url(app()->getLocale().'/services'),
        ],
        [
            'title' => 'Air Freight',
            'description' => 'Time-critical air freight coordination for priority cargo and international supply chains.',
            'image' => 'assets/transland/images/services/service-air-freight.jpg',
            'link' => url(app()->getLocale().'/services'),
        ],
        [
            'title' => 'Freight & Logistics',
            'description' => 'End-to-end freight coordination with an emphasis on reliability, compliance, and operational continuity.',
            'image' => 'assets/transland/images/services/service-logistics-coordination.jpg',
            'link' => url(app()->getLocale().'/services'),
        ],
        [
            'title' => 'Procurement Services',
            'description' => 'Sourcing and procurement support for logistics-related goods, equipment, and operational requirements.',
            'image' => 'assets/transland/images/services/service-procurement.jpg',
            'link' => url(app()->getLocale().'/services'),
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
