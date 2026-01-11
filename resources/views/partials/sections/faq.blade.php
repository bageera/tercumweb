@php
    $stats = $stats ?? [
        ['value' => '100%', 'label' => 'Commitment'],
        ['value' => '24/7', 'label' => 'Support'],
        ['value' => 'Global', 'label' => 'Reach'],
        ['value' => 'On-Time', 'label' => 'Delivery'],
    ];
@endphp

<section class="counter-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach($stats as $stat)
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <h2>{{ $stat['value'] }}</h2>
                        <p>{{ $stat['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
