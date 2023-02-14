<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getListPosts()
    {
        return response()->json(Post::where('status', 'publish')
            ->orderBy('id', 'desc')
            ->paginate(10));
    }
}
