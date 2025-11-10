<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\HomepageContent */
class HomepageContentApiResource extends JsonResource
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
            'hero_title' => $this->hero_title,
            'hero_subtitle' => $this->hero_subtitle,
            'hero_description' => $this->hero_description,
            'hero_cta_label' => $this->hero_cta_label,
            'hero_cta_url' => $this->hero_cta_url,
            'secondary_cta_label' => $this->secondary_cta_label,
            'secondary_cta_url' => $this->secondary_cta_url,
            'intro_title' => $this->intro_title,
            'intro_body' => $this->intro_body,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'featured_project_ids' => $this->featured_project_ids ?? [],
            'featured_projects' => PortfolioProjectApiResource::collection($this->featuredProjects()),
            'meta' => $this->meta ?? [],
        ];
    }
}
