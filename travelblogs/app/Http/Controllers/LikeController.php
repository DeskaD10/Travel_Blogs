<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request, $postId)
{
    if (!Auth::check()) {
        return response()->json(['success' => false, 'message' => 'Трябва да сте логнат.']);
    }

    $post = \App\Models\Post::find($postId);
    if (!$post) {
        return response()->json(['success' => false, 'message' => 'Постът не е намерен.']);
    }

    // Проверка дали вече е харесан
    $alreadyLiked = \App\Models\Like::where('post_id', $postId)
                        ->where('user_id', Auth::id())
                        ->first();

    if ($alreadyLiked) {
        return response()->json(['success' => false, 'message' => 'Вече сте харесали този пост.']);
    }

    \App\Models\Like::create([
        'post_id' => $postId,
        'user_id' => Auth::id(),
    ]);

    return response()->json(['success' => true]);
}

}

