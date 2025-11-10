<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_posts_include_cover_image_url(): void
    {
        Storage::disk('public')->put('posts/covers/example.jpg', 'cover');

        Post::create([
            'title' => 'Hello World',
            'slug' => 'hello-world',
            'excerpt' => 'Excerpt',
            'body' => 'Body',
            'status' => 'published',
            'published_at' => now()->subDay(),
            'cover_image_path' => 'posts/covers/example.jpg',
        ]);

        $response = $this->getJson('/api/v1/posts');

        $response
            ->assertOk()
            ->assertJsonFragment([
                'slug' => 'hello-world',
                'cover_image_url' => Storage::disk('public')->url('posts/covers/example.jpg'),
            ]);
    }
}
