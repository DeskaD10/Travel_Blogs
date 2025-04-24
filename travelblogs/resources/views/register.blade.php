@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')

<form action="{{route ('users.store') }}" method="POST">
  @csrf
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{Session::get('success') }}</li>
        </ul>
    </div>
@endif

    @error('name')
    <p class="alert-danger">{{ $errors->first('name') }} </p>
    @enderror
    <label for="name"><b>Username</b></label>
    <input type="text" value="{{ old('name') }}" placeholder="Enter name" name="name" id="name" required>

    @error('email')
    <p class="alert-danger">{{ $errors->first('email') }} </p>
    @enderror
    <label for="email"><b>Email</b></label>
    <input type="text" value="{{ old('email') }}" placeholder="Enter email" name="email" id="email" required>

    @error('password')
    <p class="alert-danger">{{ $errors->first('password') }} </p>
    @enderror
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    @error('psw-repeat')
    <p class="alert-danger">{{ $errors->first('samepwd') }} </p>
    @enderror
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Don't have an account? <a href="{{ route('login') }}">Sign in</a>.</p>
  </div>
</form>


@endsection('maincontent')

@section('sidebar')
    @include('sidebar')
@endsection('sidebar')
