<?php

namespace App\Models;

use App\Events\ContentChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class HomepageContent extends Model
{
    /** @use HasFactory<\Database\Factories\HomepageContentFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'hero_title',
        'hero_subtitle',
        'hero_description',
        'hero_cta_label',
        'hero_cta_url',
        'secondary_cta_label',
        'secondary_cta_url',
        'intro_title',
        'intro_body',
        'seo_title',
        'seo_description',
        'featured_project_ids',
        'meta',
    ];

    protected $casts = [
        'featured_project_ids' => 'array',
        'meta' => 'array',
    ];

    /**
     * @return \Illuminate\Support\Collection<int, \App\Models\PortfolioProject>
     */
    public function featuredProjects(): Collection
    {
        $ids = collect($this->featured_project_ids ?? [])
            ->filter()
            ->map(fn (int|string $id): int => (int) $id)
            ->values();

        if ($ids->isEmpty()) {
            return collect();
        }

        $projects = PortfolioProject::query()
            ->whereIn('id', $ids)
            ->get();

        return $projects
            ->sortBy(fn ($project) => $ids->search($project->id))
            ->values();
    }

    protected static function booted(): void
    {
        static::creating(function (HomepageContent $content): void {
            if (blank($content->slug)) {
                $content->slug = 'default';
            }
        });

        foreach (['created', 'updated', 'deleted'] as $event) {
            static::{$event}(function (HomepageContent $content) use ($event) {
                ContentChanged::dispatch($content, $event);
            });
        }
    }
}
