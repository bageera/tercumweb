@extends('layouts.app')

@section('title', 'Tercum LLC – Logistics & Maritime Services')

@section('content')

{{-- HERO / SLIDER --}}
<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider"
             style="background-image:url({{ asset('assets/transland/images/slider/slider1.png') }})">
            <div class="container">
                <div class="slider-content text-left">
                    <h2>Global Logistics Solutions</h2>
                    <p>
                        Tercum LLC provides coordinated maritime, air freight, logistics,
                        and procurement services supporting time-sensitive and
                        compliance-driven operations worldwide.
                    </p>

                    <a href="{{ url(app()->getLocale().'/contact') }}" class="btn">
                        Start a Conversation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES OVERVIEW --}}
@include('partials.services-overview')

{{-- ABOUT OVERVIEW --}}
@include('partials.about-overview')

{{-- CALL TO ACTION --}}
@include('partials.cta', [
    'text' => 'Looking for a logistics partner you can rely on?',
    'buttonText' => 'Contact Our Team'
])

@endsection
