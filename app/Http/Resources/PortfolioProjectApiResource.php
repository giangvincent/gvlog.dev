<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\PortfolioProject */
class PortfolioProjectApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'tagline' => $this->tagline,
            'summary' => $this->summary,
            'body' => $this->body,
            'thumbnail_url' => $this->thumbnail_asset_url,
            'hero_image_url' => $this->hero_image_asset_url,
            'project_url' => $this->project_url,
            'source_url' => $this->source_url,
            'tags' => $this->tags ?? [],
            'is_featured' => $this->is_featured,
            'sort_order' => $this->sort_order,
            'published_at' => optional($this->published_at)->toAtomString(),
            'created_at' => optional($this->created_at)->toAtomString(),
            'updated_at' => optional($this->updated_at)->toAtomString(),
        ];
    }
}
