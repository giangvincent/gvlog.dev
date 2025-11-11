<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Service */
class ServiceApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'cover_image_url' => $this->cover_image_url,
            'is_featured' => $this->is_featured,
            'sort_order' => $this->sort_order,
            'meta' => $this->meta ?? [],
        ];
    }
}
