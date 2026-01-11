@extends('layouts.app')

@section('title', 'Tercum LLC – Logistics & Maritime Services')

@section('content')

{{-- HERO / SLIDER --}}
<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider"
             style="background-image:url({{ asset('assets/transland/images/slider/slider1.jpg') }})">
            <div class="container">
                <div class="slider-content text-left">
                    <h2>Reliable Maritime & Logistics Solutions</h2>
                    <p>Let us walk the last mile with you.</p>

                    <a href="{{ url(app()->getLocale().'/contact') }}" class="btn">
                        Get Started
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
    'text' => 'Looking for a dependable logistics partner?',
    'buttonText' => 'Request a Quote'
])

@endsection
