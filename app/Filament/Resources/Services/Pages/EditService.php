<?php

namespace App\Filament\Resources\Services\Pages;

use App\Filament\Resources\Services\ServiceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function () {
                    $service = $this->getRecord();
                    $service->deleteCoverImage($service->cover_image_path);
                    $service->deleteAllAttachments('services/attachments', $service->body);
                }),
        ];
    }
}
