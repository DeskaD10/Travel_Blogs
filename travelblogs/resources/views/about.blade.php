@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')

<div class="text-center">
    <h1 class="mb-4">About Us</h1>
    <p class="lead">
        Welcome to <strong>World Travelling Company</strong> – your gateway to unforgettable adventures around the globe!
        We specialize in creating tailor-made travel experiences that inspire, relax, and excite.
    </p>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <img src="{{ asset('build\assets\LOGO.JPG') }}" class="img-fluid rounded shadow" alt="Travel Agency">
    </div>
    <div class="col-md-6">
        <h3>Why Choose Us?</h3>
        <ul class="list-unstyled fs-5">
            <li>✓ Personalized vacation planning</li>
            <li>✓ Exclusive deals on flights and hotels</li>
            <li>✓ 24/7 customer support</li>
            <li>✓ Local expert guides at every destination</li>
            <li>✓ Over 15 years of travel experience</li>
        </ul>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <img src="{{ asset('build\assets\team.jpg') }}" class="img-fluid rounded shadow" alt="Our Team">
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <h3>Meet Our Team</h3>
        <p class="fs-5">
            Our dedicated team of travel consultants is passionate about helping you explore the world your way.
            From tropical escapes to cultural tours, we plan every trip like it’s our own.
        </p>
    </div>
</div>

@endsection

@section('sidebar')
    @include('sidebar')
@endsection
