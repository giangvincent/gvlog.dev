<?php

namespace App\Filament\Resources\PortfolioProjects\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Section::make('Project Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(debounce: 500)
                            ->afterStateUpdated(function (Set $set, ?string $state, Get $get): void {
                                if (filled($get('slug'))) {
                                    return;
                                }

                                $set('slug', Str::slug((string) $state));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('tagline')
                            ->maxLength(255),
                        TextInput::make('project_url')
                            ->label('Project URL')
                            ->url(),
                        TextInput::make('source_url')
                            ->label('Source URL')
                            ->url(),
                        TextInput::make('thumbnail_url')
                            ->label('Thumbnail URL')
                            ->columnSpanFull(),
                        TextInput::make('hero_image_url')
                            ->label('Hero Image URL')
                            ->columnSpanFull(),
                    ]),
                Section::make('Content')
                    ->columnSpan(2)
                    ->schema([
                        Textarea::make('summary')
                            ->rows(3),
                        RichEditor::make('body')
                            ->columnSpanFull(),
                    ]),
                Section::make('Meta')
                    ->schema([
                        TagsInput::make('tags')
                            ->suggestions([
                                'Laravel',
                                'Filament',
                                'PHP',
                                'JavaScript',
                                'Tailwind',
                                'Design',
                            ])
                            ->placeholder('Add a tag and press enter'),
                        Toggle::make('is_featured')
                            ->label('Featured on homepage')
                            ->default(false),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->minValue(0)
                            ->default(0),
                        DateTimePicker::make('published_at')
                            ->label('Published At'),
                    ]),
            ]);
    }
}
