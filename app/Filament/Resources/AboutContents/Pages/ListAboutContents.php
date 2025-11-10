<?php

namespace App\Filament\Resources\AboutContents\Pages;

use App\Filament\Resources\AboutContents\AboutContentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutContents extends ListRecords
{
    protected static string $resource = AboutContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
