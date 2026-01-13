@extends('layouts.app')

@section('title', 'Contact Us | Tercum LLC')

@section('content')

{{-- BREADCRUMB --}}
@include('partials.breadcrumb', [
    'title' => 'Contact',
    'current' => 'Get in Touch'
])

{{-- CONTACT HERO --}}
<section class="contact-hero-area pt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <span class="sub-title">Contact Us</span>
                <h1>Let’s Talk Logistics</h1>
                <p>
                    Whether you’re requesting a quote, planning a shipment, or exploring
                    a long-term logistics partnership, our team is ready to support your
                    operations — wherever they take place.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT INFO (PRIMARY CTA STRIP) --}}
@include('partials.sections.contact-info')

{{-- CONTACT FORM --}}
<section class="contact-form-area pb-100">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-wrapper">

                    <div class="contact-form">

                        {{-- FLASH SUCCESS --}}
                        @if (session('success'))
                            <div class="alert alert-success mb-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- VALIDATION ERRORS --}}
                        @if ($errors->any())
                            <div class="alert alert-danger mb-4" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h2>Send Us a Message</h2>
                        <p>
                            Share a few details about your logistics requirements and a
                            member of our team will follow up shortly. We operate across
                            regions and time zones and typically respond within one
                            business day.
                        </p>

                        <form method="POST" action="{{ url(app()->getLocale().'/contact') }}">
                            @csrf

                            {{-- Honeypot --}}
                            <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none">

                            <div class="row">
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Your Name"
                                        required
                                        aria-label="Your Name"
                                    >
                                </div>

                                <div class="col-md-6">
                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Email Address"
                                        required
                                        aria-label="Email Address"
                                    >
                                </div>

                                <div class="col-md-12">
                                    <input
                                        type="text"
                                        name="company"
                                        value="{{ old('company') }}"
                                        placeholder="Company (Optional)"
                                        aria-label="Company"
                                    >
                                </div>

                                <div class="col-md-12">
                                    <textarea
                                        name="message"
                                        rows="6"
                                        placeholder="How can we support your logistics needs?"
                                        required
                                        aria-label="Message"
                                    >{{ old('message') }}</textarea>
                                </div>

                                <div class="col-md-12">
                                    <button
                                        type="submit"
                                        class="btn"
                                        onclick="this.disabled=true; this.form.submit();"
                                    >
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>

                        <p class="contact-note">
                            Your information is handled confidentially and used solely
                            to respond to your inquiry.
                        </p>

                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

@endsection
