@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<div class="container my-4">
    <h2 class="text-center mb-4">Travel Blog Posts</h2>

    @php
        $posts = \App\Models\Post::with('comments.user')->get();
    @endphp

    @foreach($posts as $post)
        <div class="card mb-4 shadow-sm">
            <div class="row g-0">
                <div class="col-md-4">
                @if($post->image)
    <div>
        <img src="{{ Storage::url($post->image) }}" alt="Post Image" style="max-width: 100%; height: auto;">
    </div>
@endif

                    <!-- <img src="{{ asset('build/assets/' . urlencode($post->image)) }}" class="img-fluid rounded-start" alt="Blog Image"> -->
                    <!-- <img src="{{ Storage::url('images/' . $post->image) }}" alt="Blog Image"> -->
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-outline-danger btn-sm like-btn" data-post-id="{{ $post->id }}">❤️ Like</button>

                            <form action="{{ route('comments.store', $post->id) }}" method="POST" class="d-flex mt-2">
                                @csrf
                                <input name="content" class="form-control form-control-sm w-75 me-2" placeholder="Write a comment..." required />
                                <button type="submit" class="btn btn-outline-primary btn-sm">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Коментари под поста (извън .card-body) -->
            <div class="px-4 pb-3">
                <button class="btn btn-link text-decoration-none p-0 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#comments-{{ $post->id }}" aria-expanded="false" aria-controls="comments-{{ $post->id }}">
                    💬 Show Comments ({{ $post->comments->count() }})
                </button>

                <div class="collapse mt-2" id="comments-{{ $post->id }}">
                    <div class="card card-body bg-light">
                        @forelse($post->comments as $comment)
                            <div class="mb-1">
                                <strong>{{ $comment->user->name ?? 'Guest' }}:</strong> {{ $comment->content }}
                            </div>
                        @empty
                            <div class="text-muted">No comments yet. Be the first!</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Modal for success message -->
<div class="modal" tabindex="-1" id="likeModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Post Liked!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Your like has been registered successfully.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const likeButtons = document.querySelectorAll('.like-btn');

        likeButtons.forEach(button => {
            button.addEventListener('click', function () {
                const postId = this.getAttribute('data-post-id');

                fetch(`/like/${postId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Постът е харесан! ❤️');
                    } else {
                        alert(data.message || 'Нещо се обърка');
                    }
                })
                .catch(error => {
                    console.error('Грешка при заявката:', error);
                    alert('Възникна грешка при изпращане на Like!');
                });
            });
        });
    });
</script>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
