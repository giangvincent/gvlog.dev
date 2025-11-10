<?php

namespace App\Models;

use App\Events\ContentChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    /** @use HasFactory<\Database\Factories\AboutContentFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'headline',
        'subheadline',
        'bio',
        'location',
        'years_experience',
        'primary_cta_label',
        'primary_cta_url',
        'secondary_cta_label',
        'secondary_cta_url',
        'skills',
        'avatar_url',
        'meta',
    ];

    protected $casts = [
        'skills' => 'array',
        'meta' => 'array',
        'years_experience' => 'integer',
    ];

    protected static function booted(): void
    {
        static::creating(function (AboutContent $about): void {
            if (blank($about->slug)) {
                $about->slug = 'default';
            }
        });

        foreach (['created', 'updated', 'deleted'] as $event) {
            static::{$event}(function (AboutContent $about) use ($event) {
                ContentChanged::dispatch($about, $event);
            });
        }
    }
}
