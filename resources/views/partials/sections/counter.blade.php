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
