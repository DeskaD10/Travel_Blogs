<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('build\assets\LOGO.JPG') }}" alt="Logo" style="height:50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'posts.blog' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.blog') }}">Blog Page</a>
</li>

                <li class="nav-item {{ Route::currentRouteName() == 'posts.create' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
             @if(auth()->check())
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="nav-link text-white fw-bold">Welcome, {{ auth()->user()->name }}!</span>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>
