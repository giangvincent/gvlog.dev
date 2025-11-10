<?php

namespace App\Filament\Resources\HomepageContents;

use App\Filament\Resources\HomepageContents\Pages\CreateHomepageContent;
use App\Filament\Resources\HomepageContents\Pages\EditHomepageContent;
use App\Filament\Resources\HomepageContents\Pages\ListHomepageContents;
use App\Filament\Resources\HomepageContents\Schemas\HomepageContentForm;
use App\Filament\Resources\HomepageContents\Tables\HomepageContentsTable;
use App\Models\HomepageContent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomepageContentResource extends Resource
{
    protected static ?string $model = HomepageContent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHomeModern;

    public static function form(Schema $schema): Schema
    {
        return HomepageContentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomepageContentsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomepageContents::route('/'),
            'create' => CreateHomepageContent::route('/create'),
            'edit' => EditHomepageContent::route('/{record}/edit'),
        ];
    }
}
