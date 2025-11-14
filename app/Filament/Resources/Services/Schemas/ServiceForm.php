<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live()
                            ->afterStateUpdated(function (Set $set, ?string $state, Get $get): void {
                                if (filled($get('slug'))) {
                                    return;
                                }

                                $set('slug', Str::slug((string) $state));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('subtitle')
                            ->columnSpanFull(),
                        RichEditor::make('excerpt')
                            ->columnSpanFull(),
                    ]),
                Section::make('Media & Meta')->schema([
                        Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                            ])
                            ->default('draft'),
                        FileUpload::make('cover_image_path')
                            ->label('Cover Image')
                            ->disk('r2')
                            ->directory('services/covers')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->maxSize(5120),
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
                            ->label('Highlight on homepage')
                            ->default(false),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->minValue(0)
                            ->default(0),
                    ]),
                Section::make('Content')
                    ->columnSpanFull()
                    ->schema([
                        RichEditor::make('body')
                            ->fileAttachmentsDisk('r2')
                            ->fileAttachmentsDirectory('services/attachments')
                            ->fileAttachmentsVisibility('public')
                            ->columnSpanFull(),
                    ])

            ]);
    }
}
