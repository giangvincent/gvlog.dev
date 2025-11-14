<?php

namespace App\Filament\Resources\PortfolioProjects\Schemas;

use App\Filament\Resources\CompressImageService;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
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
                        FileUpload::make('thumbnail_url')
                            ->label('Thumbnail')
                            ->disk('r2')
                            ->directory('portfolio/thumbnails')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->maxSize(5120)
                            ->columnSpanFull()
                            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                                return CompressImageService::compress('portfolio/thumbnails/', $file);
                            }),
                        FileUpload::make('hero_image_url')
                            ->label('Hero Image')
                            ->disk('r2')
                            ->directory('portfolio/heroes')
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->maxSize(8192)
                            ->columnSpanFull()
                            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                                return CompressImageService::compress('portfolio/covers/', $file);
                            }),
                    ]),
                Section::make('Content')
                    ->columnSpan(2)
                    ->schema([
                        Textarea::make('summary')
                            ->rows(3),
                        RichEditor::make('body')
                            ->fileAttachmentsDisk('r2')
                            ->fileAttachmentsDirectory('portfolio/attachments')
                            ->fileAttachmentsVisibility('public')
                            ->columnSpanFull()
                            ->saveUploadedFileAttachmentUsing(function (TemporaryUploadedFile $file): string {
                                return CompressImageService::compress('portfolio/attachments/', $file);
                            }),
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
