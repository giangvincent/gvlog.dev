<?php

namespace App\Filament\Resources\AboutContents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutContentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('headline')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->badge()
                    ->sortable(),
                TextColumn::make('location')
                    ->toggleable(),
                TextColumn::make('years_experience')
                    ->label('Years')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->since()
                    ->sortable(),
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
