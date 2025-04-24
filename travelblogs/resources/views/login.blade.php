@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')

<form action="{{ route('login') }}" method="POST">
  @csrf
  <div class="container">
    <h1>Login</h1>
    <p>Please enter your credentials to sign in.</p>
    <hr>

    @if (Session::has('error'))
      <div class="alert alert-danger">
          {{ Session::get('error') }}
      </div>
    @endif

    @error('email')
      <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="email"><b>Email</b></label>
    <input type="text" value="{{ old('email') }}" placeholder="Enter your email" name="email" id="email" required>

    @error('password')
      <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

     <label class="checkbox-label">
      <input type="checkbox" name="terms" value="1" required>
      I agree to the <a href="#">Terms and Conditions</a>
    </label>

    <hr>

    <button type="submit" class="registerbtn">Login</button>
  </div>

  <div class="container signin">
    <p>Don't have an account? <a href="{{ route('register') }}">Register</a>.</p>
  </div>
</form>

@endsection

@section('sidebar')
    @include('sidebar')
@endsection
