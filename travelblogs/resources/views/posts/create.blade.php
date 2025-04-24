@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container">
    <h1>Create New Post</h1>
    <p>Please fill in the details to create a new post.</p>
    <hr>

    @error('title')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="title"><b>Title</b></label>
    <input type="text" value="{{ old('title') }}" placeholder="Enter title" name="title" id="title" required>

    @error('content')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="content"><b>Content</b></label>

    <textarea name="content" id="content" rows="5" placeholder="Enter content" required>{{ old('content') }}</textarea>

    @error('image')
    <p class="alert-danger">{{ $message }}</p>
    @enderror
    <label for="image"><b>Post Image (optional)</b></label>
    <input type="file" name="image" id="image">

    <hr>

    <button type="submit" class="registerbtn">Save Post</button>

    <!-- Добавяме бутон за преглеждане на всички постове -->
    <a href="{{ route('posts.index') }}" class="btn btn-secondary" style="margin-left: 10px;">View All Posts</a>
  </div>
</form>

@endsection

@section('sidebar')
    @include('sidebar')
@endsection
