<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;

class ContentChanged
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public Model $model,
        public string $action,
    ) {
    }
}
