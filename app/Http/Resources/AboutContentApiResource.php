<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\AboutContent */
class AboutContentApiResource extends JsonResource
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
            'headline' => $this->headline,
            'subheadline' => $this->subheadline,
            'bio' => $this->bio,
            'location' => $this->location,
            'years_experience' => $this->years_experience,
            'primary_cta_label' => $this->primary_cta_label,
            'primary_cta_url' => $this->primary_cta_url,
            'secondary_cta_label' => $this->secondary_cta_label,
            'secondary_cta_url' => $this->secondary_cta_url,
            'skills' => $this->skills ?? [],
            'avatar_url' => $this->avatar_url,
            'meta' => $this->meta ?? [],
        ];
    }
}
