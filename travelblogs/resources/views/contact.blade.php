@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<form action="{{ route('contact.store') }}" method="POST">
  @csrf
  <div class="container">
    <h1>Contact Form</h1>
    <p>Please fill out this form to get in touch with us.</p>
    <hr>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @error('name')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="name"><b>Name</b></label>
    <input type="text" value="{{ old('name') }}" placeholder="Enter your name" name="name" id="name" required>

    @error('email')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="email"><b>Email</b></label>
    <input type="text" value="{{ old('email') }}" placeholder="Enter your email" name="email" id="email" required>

    @error('gender')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="gender"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" required> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br><br>

    @error('phone')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="phone"><b>Phone Number</b></label>
    <input type="text" value="{{ old('phone') }}" placeholder="Enter phone number" name="phone" id="phone" required>

    @error('message')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="message"><b>Message</b></label>
    <textarea name="message" id="message" rows="5" placeholder="Enter your message..." required>{{ old('message') }}</textarea>

    <hr>
    <button type="submit" class="registerbtn">Send Message</button>
  </div>

  <div class="container signin">
    <p>Thank you for contacting us!</p>
  </div>
</form>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
