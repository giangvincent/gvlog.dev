<?php

namespace App\Filament\Resources\HomepageContents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomepageContentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
                    ->badge()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('hero_title')
                    ->label('Hero title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('intro_title')
                    ->label('Intro title')
                    ->toggleable(),
                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->label('Updated'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
