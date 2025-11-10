<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PortfolioProjectApiResource;
use App\Models\PortfolioProject;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PortfolioProjectController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $projects = PortfolioProject::query()
            ->whereNotNull('published_at')
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->get();

        return PortfolioProjectApiResource::collection($projects);
    }

    public function show(string $slug): PortfolioProjectApiResource
    {
        $project = PortfolioProject::query()
            ->where('slug', $slug)
            ->whereNotNull('published_at')
            ->firstOrFail();

        return PortfolioProjectApiResource::make($project);
    }
}
