<?php

namespace App\Filament\Resources\AboutContents\Pages;

use App\Filament\Resources\AboutContents\AboutContentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutContent extends EditRecord
{
    protected static string $resource = AboutContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
