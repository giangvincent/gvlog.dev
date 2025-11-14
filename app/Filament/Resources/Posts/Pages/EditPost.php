<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()->before(function () {
                $post = $this->getRecord();
                $post->deleteCoverImage($post->cover_image_path);
                $post->deleteAllAttachments('posts/attachments', $post->body);
            }),
        ];
    }
}
