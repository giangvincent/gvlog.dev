<?php

namespace App\Models;

use App\Events\ContentChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PortfolioProject extends Model
{
    /** @use HasFactory<\Database\Factories\PortfolioProjectFactory> */
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'summary',
        'body',
        'thumbnail_url',
        'hero_image_url',
        'project_url',
        'source_url',
        'tags',
        'is_featured',
        'sort_order',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'bool',
        'published_at' => 'datetime',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected static function booted(): void
    {
        foreach (['created', 'updated', 'deleted'] as $event) {
            static::{$event}(function (PortfolioProject $project) use ($event) {
                ContentChanged::dispatch($project, $event);
            });
        }
    }

    public function getThumbnailAssetUrlAttribute(): ?string
    {
        return $this->assetUrl($this->getAttribute('thumbnail_url'));
    }

    public function getHeroImageAssetUrlAttribute(): ?string
    {
        return $this->assetUrl($this->getAttribute('hero_image_url'));
    }

    protected function assetUrl(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        $disk = config('filesystems.cloud', config('filesystems.default'));

        return Storage::disk($disk)->url($path);
    }
}
