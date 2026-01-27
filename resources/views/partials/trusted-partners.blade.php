@php
    /**
     * Trusted Partners
     * Safe defaults to prevent Blade 500s
     */

    $partners = $partners ?? [
        [
            'name' => 'Global Logistics Partner',
            'logo' => 'assets/transland/images/partners/pln_logo.png',
        ],
        [
            'name' => 'International Shipping Partner',
            'logo' => 'assets/transland/images/partners/star_logo_original-01.png',
        ],
        [
            'name' => 'DHL GoGreen',
            'logo' => 'assets/transland/images/partners/dhl_logo.png',
        ],
    ];
@endphp

<section class="partner-area pt-80 pb-80">
    <div class="container">

        {{-- Section Header --}}
        <div class="section-title text-center">
            <span>Our Network</span>
            <h2>Our Trusted Shipping Partners</h2>
            <p>
                At Tercum, our strength lies in the partnerships we’ve built.
                We work with a global network of reliable carriers, freight
                forwarders, and logistics providers to ensure shipments are
                handled responsibly, efficiently, and reliably worldwide.
            </p>
        </div>

        {{-- Partner Logos --}}
        <div class="row justify-content-center align-items-center mt-40">
            @foreach ($partners as $partner)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 text-center">
                    <div class="partner-logo">
                    <img
                            src="{{ asset($partner['logo']) }}"
                            alt="{{ $partner['name'] }}"
                            loading="lazy"
                            class="partner-logo-img"
                        />
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
