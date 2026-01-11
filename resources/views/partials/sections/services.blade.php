<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Our Services</span>
            <h2>What We Offer</h2>
        </div>

        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img src="{{ asset($service['image']) }}" alt="">
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
