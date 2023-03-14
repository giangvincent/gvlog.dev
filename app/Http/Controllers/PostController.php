<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getListPosts(Request $request): JsonResponse
    {
        $category = $request->get('category');
        if ($category) {
            return response()->json(
                Post::where('status', 'publish')
                    ->whereHas('categories', function ($query) use ($category) {
                        $query->where('slug', $category);
                    })
                    ->with('categories:name,slug,status', 'tags:name,slug,status')
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
