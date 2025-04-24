
@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<div class="container my-4">
    <h2 class="text-center mb-4">Popular Travel Destinations</h2>

    <div class="row">
        @foreach($destinations as $destination)
            @if($loop->iteration % 3 == 1 && $loop->iteration > 1) </div><div class="row"> @endif
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($destination['image']) }}" class="card-img-top" alt="Destination Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $destination['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
    </div>
</div>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
