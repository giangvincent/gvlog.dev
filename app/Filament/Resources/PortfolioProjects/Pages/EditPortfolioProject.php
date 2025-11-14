<?php

namespace App\Filament\Resources\PortfolioProjects\Pages;

use App\Filament\Resources\PortfolioProjects\PortfolioProjectResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioProject extends EditRecord
{
    protected static string $resource = PortfolioProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function () {
                    $project = $this->getRecord();
                    $project->deleteCoverImage($project->thumbnail_url);
                    $project->deleteCoverImage($project->hero_image_url);
                    $project->deleteAllAttachments('portfolio/attachments', $project->body);
                }),
        ];
    }
}
