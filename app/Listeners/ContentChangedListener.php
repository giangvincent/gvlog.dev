<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ContentChanged;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Log;

class ContentChangedListener
{
    public function handleContentChanged(ContentChanged $event): void
    {
        $model = class_basename($event->model);
        $id    = $event->model->getKey();
        $action = $event->action;

        Log::info("Content changed: {$model} [{$id}] {$action}");

        $flagPath = base_path('.content-changed');

        file_put_contents($flagPath, now()->toDateTimeString());
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $event->listen(
            ContentChanged::class,
            [self::class, 'handleContentChanged']
        );
    }
}
