@extends('layouts.app')

@section('title', 'Logistics, Maritime & Infrastructure Services | Tercum LLC')
@section('meta_description', 'Tercum LLC provides integrated logistics, maritime, procurement, architectural, and urban development services supporting complex domestic and international operations.')
@section('content')

{{-- HERO / SLIDER --}}
<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider"
             style="background-image:url({{ asset('assets/transland/images/slider/slider1.png') }})">
            <div class="container">
                <div class="slider-content text-left">
                    <h2>Global Logistics Solutions</h2>
                    

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
