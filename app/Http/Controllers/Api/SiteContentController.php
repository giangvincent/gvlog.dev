<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutContentApiResource;
use App\Http\Resources\HomepageContentApiResource;
use App\Http\Resources\PortfolioProjectApiResource;
use App\Models\AboutContent;
use App\Models\HomepageContent;
use Illuminate\Http\JsonResponse;

class SiteContentController extends Controller
{
    public function about(): AboutContentApiResource
    {
        $slug = request()->query('slug', 'default');

        $about = AboutContent::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return AboutContentApiResource::make($about);
    }

    public function homepage(): HomepageContentApiResource
    {
        $slug = request()->query('slug', 'default');

        $homepage = HomepageContent::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return HomepageContentApiResource::make($homepage);
    }

    public function overview(): JsonResponse
    {
        $about = AboutContent::query()->where('slug', 'default')->first();
        $homepage = HomepageContent::query()->where('slug', 'default')->first();

        return response()->json([
            'about' => $about ? AboutContentApiResource::make($about) : null,
            'homepage' => $homepage ? HomepageContentApiResource::make($homepage) : null,
            'featured_projects' => $homepage
                ? PortfolioProjectApiResource::collection($homepage->featuredProjects())
                : [],
        ]);
    }
}
