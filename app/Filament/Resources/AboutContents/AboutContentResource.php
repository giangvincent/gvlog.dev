<?php

namespace App\Filament\Resources\AboutContents;

use App\Filament\Resources\AboutContents\Pages\CreateAboutContent;
use App\Filament\Resources\AboutContents\Pages\EditAboutContent;
use App\Filament\Resources\AboutContents\Pages\ListAboutContents;
use App\Filament\Resources\AboutContents\Schemas\AboutContentForm;
use App\Filament\Resources\AboutContents\Tables\AboutContentsTable;
use App\Models\AboutContent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutContentResource extends Resource
{
    protected static ?string $model = AboutContent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserCircle;

    public static function form(Schema $schema): Schema
    {
        return AboutContentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutContentsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutContents::route('/'),
            'create' => CreateAboutContent::route('/create'),
            'edit' => EditAboutContent::route('/{record}/edit'),
        ];
    }
}
