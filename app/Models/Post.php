<?php

namespace App\Models;

use App\Events\ContentChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'status',
        'published_at',
        'cover_image_path',
    ];

    protected $casts = [
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
            static::{$event}(function (Post $post) use ($event) {
                ContentChanged::dispatch($post, $event);
            });
        }
    }

    public function getCoverImageUrlAttribute(): ?string
    {
        return $this->resolveAssetUrl($this->cover_image_path);
    }

    protected function resolveAssetUrl(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        $disk = config('filesystems.cloud', config('filesystems.default'));

        return Storage::disk($disk)->url($path);
    }
}
