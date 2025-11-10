<?php

namespace App\Filament\Resources\HomepageContents\Pages;

use App\Filament\Resources\HomepageContents\HomepageContentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomepageContents extends ListRecords
{
    protected static string $resource = HomepageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
