<?php

namespace App\Filament\Resources\HomepageContents\Pages;

use App\Filament\Resources\HomepageContents\HomepageContentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomepageContent extends EditRecord
{
    protected static string $resource = HomepageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
