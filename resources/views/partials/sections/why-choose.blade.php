@php
    $subtitle = $subtitle ?? 'Why Choose Us';
    $title = $title ?? 'We Provide Reliable Logistics Solutions';
    $reasons = $reasons ?? [
        ['icon' => 'fas fa-ship', 'title' => 'Maritime Expertise', 'text' => 'Deep industry knowledge and operational experience.'],
        ['icon' => 'fas fa-route', 'title' => 'End-to-End Logistics', 'text' => 'From port to final destination.'],
        ['icon' => 'fas fa-shield-alt', 'title' => 'Compliance Focused', 'text' => 'Risk-aware, regulation-conscious operations.'],
    ];
@endphp

<section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>{{ $subtitle }}</span>
            <h2>{{ $title }}</h2>
        </div>

        <div class="row">
            @foreach($reasons as $reason)
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose">
                        <i class="{{ $reason['icon'] }}"></i>
                        <h3>{{ $reason['title'] }}</h3>
                        <p>{{ $reason['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
