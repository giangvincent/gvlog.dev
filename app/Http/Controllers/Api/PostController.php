<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostApiResource;
use App\Models\Post;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PostController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $posts = Post::query()
            ->where('status', 'published')
            ->orderByDesc('published_at')
            ->select(['id', 'title', 'slug', 'excerpt', 'body', 'cover_image_path', 'status', 'published_at'])
            ->get();

        return PostApiResource::collection($posts);
    }

    public function show(string $slug): PostApiResource
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->select(['id', 'title', 'slug', 'excerpt', 'body', 'cover_image_path', 'status', 'published_at'])
            ->firstOrFail();

        return PostApiResource::make($post);
    }
}
