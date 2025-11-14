<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Filament\Resources\CompressImageService;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
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
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                            ])
                            ->default('draft')
                            ->required(),
                        DateTimePicker::make('published_at')
                            ->label('Published At')
                            ->seconds(false),
                    ])
                    ->columns(2),
                Section::make('Media')
                    ->schema([
                        FileUpload::make('cover_image_path')
                            ->label('Cover Image')
                            ->disk('r2')                     // still used for URLs / preview
                            ->directory('posts/covers')   // logical target directory
                            ->visibility('public')
                            ->image()
                            ->imageEditor()
                            ->maxSize(5120)                  // 5 MB before compression
                            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                                return CompressImageService::compress('posts/covers/', $file);
                            })
                    ]),
                Section::make('Content')
                    ->columnSpanFull()
                    ->schema([
                        Textarea::make('excerpt')
                            ->rows(3)
                            ->label('Excerpt'),
                        RichEditor::make('body')
                            ->label('Body')
                            ->fileAttachmentsDisk('r2')
                            ->fileAttachmentsDirectory('posts/attachments')
                            ->fileAttachmentsVisibility('public')
                            ->columnSpanFull()
                            ->saveUploadedFileAttachmentUsing(function (TemporaryUploadedFile $file): string {
                                return CompressImageService::compress('posts/attachments/', $file);
                            }),
                    ]),
            ]);
    }
}
