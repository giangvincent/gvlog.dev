<?php

namespace App\Models;

use App\Events\ContentChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'excerpt',
        'body',
        'cover_image_path',
        'is_featured',
        'status',
        'sort_order',
        'meta',
    ];

    protected $casts = [
        'is_featured' => 'bool',
        'sort_order' => 'integer',
        'meta' => 'array',
    ];

    protected static function booted(): void
    {
        static::creating(function (Service $service): void {
            if (blank($service->slug)) {
                $service->slug = Str::slug($service->title ?? uniqid('service-'));
            }
        });

        foreach (['created', 'updated', 'deleted'] as $event) {
            static::{$event}(function (Service $service) use ($event) {
                ContentChanged::dispatch($service, $event);
            });
        }
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('title');
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
