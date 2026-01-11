<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider"
             style="background-image:url({{ asset('assets/transland/images/slider/slider1.jpg') }})">
            <div class="container">
                <div class="slider-content">
                    <h2>{{ $title ?? 'Reliable Transportation & Logistics' }}</h2>
                    <p>{{ $subtitle ?? 'Delivering your world on time, every time.' }}</p>

                    <a href="{{ $ctaUrl ?? url(app()->getLocale().'/contact') }}"
                       class="btn">
                        {{ $ctaText ?? 'Get Started' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
