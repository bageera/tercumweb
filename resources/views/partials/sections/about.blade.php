<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('assets/transland/images/about/about.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <span>About Us</span>
                    <h2>{{ $heading ?? 'Trusted Logistics Partner' }}</h2>
                    <p>{{ $text ?? 'Tercum LLC delivers reliable maritime and logistics services with a focus on compliance and precision.' }}</p>

                    <ul>
                        <li><i class="fas fa-check"></i> Reliable Operations</li>
                        <li><i class="fas fa-check"></i> Regulatory Awareness</li>
                        <li><i class="fas fa-check"></i> Customer-Focused</li>
                    </ul>

                    <a href="{{ url(app()->getLocale().'/about') }}" class="btn">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
