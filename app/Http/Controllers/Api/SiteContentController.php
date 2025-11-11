<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutContentApiResource;
use App\Http\Resources\PostApiResource;
use App\Http\Resources\PortfolioProjectApiResource;
use App\Http\Resources\ServiceApiResource;
use App\Models\AboutContent;
use App\Models\Post;
use App\Models\PortfolioProject;
use App\Models\Service;
use Illuminate\Http\JsonResponse;

class SiteContentController extends Controller
{
    public function about()
    {
        $slug = request()->query('slug', 'default');

        $about = AboutContent::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return AboutContentApiResource::make($about);
    }

    public function homepage(): JsonResponse
    {
        $services = Service::query()
            ->ordered()
            ->get();

        $portfolios = PortfolioProject::query()
            ->whereNotNull('published_at')
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        $posts = Post::query()
            ->where('status', 'published')
            ->orderByDesc('published_at')
            ->limit(4)
            ->get();

        $about = AboutContent::query()->where('slug', 'default')->first();

        return response()->json([
            'about' => $about ? AboutContentApiResource::make($about) : null,
            'services' => ServiceApiResource::collection($services),
            'portfolios' => PortfolioProjectApiResource::collection($portfolios),
            'posts' => PostApiResource::collection($posts),
        ]);
    }

    public function overview(): JsonResponse
    {
        return $this->homepage();
    }
}
