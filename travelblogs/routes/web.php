<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\VacationPackageController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Static pages
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::view('/login', 'login')->name('login'); // Login form
Route::post('/login', [LoginController::class, 'authenticate']); // Login logic
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Logout

/*
|--------------------------------------------------------------------------
| Posts
|--------------------------------------------------------------------------
*/

// Рут за създаване на нов пост
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Рут за съхранение на нов пост
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Рут за показване на всички постове
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/blog', function () {
    return view('posts.blog');
})->name('posts.blog');

/*
|--------------------------------------------------------------------------
| Likes
|--------------------------------------------------------------------------
*/

Route::post('/like/{postId}', [LikeController::class, 'store'])->name('like.store');

/*
|--------------------------------------------------------------------------
| Comments
|--------------------------------------------------------------------------
*/

Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('comments.store');

/*
|--------------------------------------------------------------------------
| Contacts
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Destinations
|--------------------------------------------------------------------------
*/

Route::get('/destinations', [App\Http\Controllers\DestinationController::class, 'index'])->name('destinations.index');


/*
|--------------------------------------------------------------------------
| Vacation Packages
|--------------------------------------------------------------------------
*/

Route::get('/vacation-packages', [App\Http\Controllers\VacationPackageController::class, 'index'])->name('vacation-packages.index');
