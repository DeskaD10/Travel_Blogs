

@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<div class="container my-4">
    <h2 class="text-center mb-4">Vacation Packages</h2>

    @foreach($vacationPackages as $package)
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset($package['image']) }}" class="img-fluid rounded-start" alt="Vacation Package Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $package['title'] }}</h5>
                                <p class="card-text">{{ $package['description'] }}</p>
                                <p class="card-text"><strong>Price:</strong> {{ $package['price'] }}</p>
                                <p class="card-text"><strong>Discount:</strong> {{ $package['discount'] }}</p>
                                <p class="card-text"><strong>Accommodation:</strong> {{ $package['accommodation'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="text-center mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
    </div>
</div>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
