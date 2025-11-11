<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceApiResource;
use App\Models\Service;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $services = Service::query()
            ->ordered()
            ->get();

        return ServiceApiResource::collection($services);
    }

    public function show(string $slug): ServiceApiResource
    {
        $service = Service::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return ServiceApiResource::make($service);
    }
}
