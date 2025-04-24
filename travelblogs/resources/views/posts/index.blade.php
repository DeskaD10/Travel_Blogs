@extends('layouts.app')

@section('maincontent')
    <h2>All Posts</h2>
    @foreach($posts as $post)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small>Created at: {{ $post->created_at }}</small>

            <!-- Показване на изображението, ако има такова -->
            @if ($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" style="width: 100px; height: auto;">
@endif
        </div>
    @endforeach

    <!-- Добавяме бутон за създаване на нов пост -->
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
@endsection
