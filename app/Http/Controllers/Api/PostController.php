<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::query()
            ->where('status', 'published')
            ->orderByDesc('published_at')
            ->select(['id', 'title', 'slug', 'excerpt', 'body', 'published_at'])
            ->get();

        return response()->json($posts);
    }

    public function show(string $slug): JsonResponse
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->select(['id', 'title', 'slug', 'excerpt', 'body', 'published_at'])
            ->firstOrFail();

        return response()->json($post);
    }
}
