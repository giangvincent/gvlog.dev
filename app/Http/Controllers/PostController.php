<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getListPosts(Request $request)
    {
        $category = $request->get('category');
        if ($category) {
            return response()->json(
                Post::where('status', 'publish')
                ->with(['categories' => function ($query) use ($category) {
                    $query->where('slug', $category);
                }, 'tags:name,slug,status'])
                ->orderBy('id', 'desc')
                ->paginate(10)
            );
        }
        return response()->json(Post::where('status', 'publish')
            ->with('categories:name,slug,status', 'tags:name,slug,status')
            ->orderBy('id', 'desc')
            ->paginate(10));
    }
}
