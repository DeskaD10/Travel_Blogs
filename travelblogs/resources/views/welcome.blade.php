@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<div class="container text-center" style="margin-top: 30px;">
     <!-- Hero image  -->
    <img src="{{ asset('build\assets\adventure.jpg') }}" alt="Travel Adventure" style="width:100%; max-height:400px; object-fit:cover; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.3);">

    <h1 style="margin-top: 20px; color: #007acc;">Explore the World with Us</h1>
    <p style="font-size: 1.2em;">Your dream vacation is just one step away. Discover unforgettable experiences with our travel agency.</p>

    <!-- Image grid -->
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 40px;">
        <img src="{{ asset('build\assets\beach.jpg') }}" alt="Beach" style="width:100%; border-radius: 10px;">
        <img src="{{ asset('build\assets\mountains.jpg') }}" alt="Mountains" style="width:100%; border-radius: 10px;">
        <img src="{{ asset('build\assets\city.jpg') }}" alt="City" style="width:100%; border-radius: 10px;">
        <img src="{{ asset('build\assets\nature.jpg') }}" alt="Nature" style="width:100%; border-radius: 10px;">
        <img src="{{ asset('build\assets\river.jpg') }}" alt="River" style="width:100%; border-radius: 10px;">
        <img src="{{ asset('build\assets\advent.jpg') }}" alt="Adventure" style="width:100%; border-radius: 10px;">
    </div>
</div>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
