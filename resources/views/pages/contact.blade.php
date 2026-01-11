@extends('layouts.app')

@section('title', 'Contact Us | Tercum LLC')

@section('content')

{{-- BREADCRUMB --}}
@include('partials.breadcrumb', [
    'title' => 'Contact',
    'current' => 'Get in Touch'
])

{{-- CONTACT HERO --}}
<section class="contact-hero-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="sub-title">Contact Us</span>
                <h1>Let’s Talk Logistics</h1>
                <p>
                    Have a question, need a quote, or want to discuss your logistics needs?
                    Our team is ready to help.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT INFO --}}
@include('partials.sections.contact-info')

{{-- CONTACT FORM --}}
<section class="contact-form-area pb-100">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="contact-form">

                    <h2>Send Us a Message</h2>
                    <p>
                        Complete the form below and a member of our team will respond
                        as soon as possible.
                    </p>

                    <form method="POST" action="{{ url(app()->getLocale().'/contact') }}">
                        @csrf

                        {{-- Honeypot --}}
                        <input type="text" name="website" style="display:none">

                        <div class="row">
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Your Name"
                                    required
                                >
                            </div>

                            <div class="col-md-6">
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Email Address"
                                    required
                                >
                            </div>

                            <div class="col-md-12">
                                <input
                                    type="text"
                                    name="company"
                                    placeholder="Company (Optional)"
                                >
                            </div>

                            <div class="col-md-12">
                                <textarea
                                    name="message"
                                    placeholder="How can we help you?"
                                    rows="6"
                                    required
                                ></textarea>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>

                    <p class="contact-note">
                        We typically respond within one business day.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
