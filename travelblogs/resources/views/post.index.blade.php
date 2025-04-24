@foreach($posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }} <small class="text-muted">({{ $post->likes_count }} likes)</small></h5>
            <p class="card-text">{{ $post->content }}</p>
            <!-- Add your like button or other elements here -->
        </div>
    </div>
@endforeach
