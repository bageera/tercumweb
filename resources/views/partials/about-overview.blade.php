@php
    // Safe defaults if nothing is passed
    $image = $image ?? 'assets/transland/images/about/about-1.jpg';
    $subtitle = $subtitle ?? 'About Our Company';
    $title = $title ?? 'Reliable Transportation & Logistics Partner';
    $text = $text ?? 'Tercum LLC provides dependable maritime and logistics services built on precision, compliance, and operational integrity. We focus on clear communication, structured execution, and on-time delivery.';
    $points = $points ?? [
        'Maritime & logistics expertise',
        'Compliance-focused operations',
        'Customer-first service approach',
        'Reliable, on-time delivery',
    ];
@endphp

<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            {{-- Image --}}
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset($image) }}" alt="About Tercum LLC">
                </div>
            </div>

            {{-- Content --}}
            <div class="col-lg-6">
                <div class="about-content">
                    <span>{{ $subtitle }}</span>
                    <h2>{{ $title }}</h2>
                    <p>{{ $text }}</p>

                    <ul class="about-list">
                        @foreach($points as $point)
                            <li>
                                <i class="fas fa-check-circle"></i>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ url(app()->getLocale().'/about') }}" class="btn">
                        Learn More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
