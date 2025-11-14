<?php

namespace App\Models;

use App\Events\ContentChanged;

trait FiresContentChanged
{
    public static function bootFiresContentChanged(): void
    {
        static::created(fn ($model) => event(new ContentChanged($model, 'created')));
        static::updated(fn ($model) => event(new ContentChanged($model, 'updated')));
        static::deleted(fn ($model) => event(new ContentChanged($model, 'deleted')));
    }
}
