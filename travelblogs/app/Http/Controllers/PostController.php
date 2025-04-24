<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use App\Http\Requests\StorePostRequest;
// use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::latest()->get();
        // return view('posts.index', compact('posts'));
        // $posts = Post::withCount('likes')->latest()->get();
        $posts = Post::with(['comments.user'])->withCount('likes')->latest()->get();



        return view('posts.index', compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePostRequest $request)
    // {
    //     Post::create($request->validated());

    //     return redirect()->route('posts.index')->with('success', 'Post created!');
    // }
    public function store(Request $request)
    {
         // Валидация на данните, които получаваме от формата
    $validated = $request->validate([
        'title' => 'required|min:3',  // Заглавието е задължително и минимум 3 символа
        'content' => 'required|min:5',  // Съдържанието е задължително и минимум 5 символа
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240', // Максимум 10MB за изображение
    ]);

    // Обработка на изображението, ако е качено
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    Post::create([
        'title' => $validated['title'],
        'content' => $validated['content'],
        'image' => isset($imagePath) ? $imagePath : null,
    ]);

    // Пренасочваме към страницата с всички постове и добавяме съобщение за успех
    return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdatePostRequest $request, Post $post)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

}
