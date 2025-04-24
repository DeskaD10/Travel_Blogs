<!-- @extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="container">
        <h1>Създай нов пост</h1>

        <label for="title">Заглавие</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Съдържание</label>
        <textarea name="content" id="content" rows="5" required></textarea>

        <button type="submit">Създай</button>
    </div>
</form>
@endsection -->
