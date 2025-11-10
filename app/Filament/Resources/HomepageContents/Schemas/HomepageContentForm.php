<?php

namespace App\Filament\Resources\HomepageContents\Schemas;

use App\Models\PortfolioProject;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class HomepageContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Section::make('Hero')
                    ->schema([
                        TextInput::make('slug')
                            ->required()
                            ->helperText('Used by the API to look up this homepage entry.'),
                        TextInput::make('hero_title')
                            ->label('Title')
                            ->required(),
                        TextInput::make('hero_subtitle')
                            ->label('Subtitle'),
                        Textarea::make('hero_description')
                            ->rows(3),
                        TextInput::make('hero_cta_label')
                            ->label('Primary CTA label'),
                        TextInput::make('hero_cta_url')
                            ->label('Primary CTA URL')
                            ->url(),
                        TextInput::make('secondary_cta_label')
                            ->label('Secondary CTA label'),
                        TextInput::make('secondary_cta_url')
                            ->label('Secondary CTA URL')
                            ->url(),
                    ]),
                Section::make('Intro & SEO')
                    ->schema([
                        TextInput::make('intro_title')
                            ->label('Intro title'),
                        Textarea::make('intro_body')
                            ->rows(3)
                            ->label('Intro body'),
                        TextInput::make('seo_title')
                            ->label('SEO title'),
                        Textarea::make('seo_description')
                            ->rows(3)
                            ->label('SEO description'),
                    ]),
                Section::make('Featured Projects')
                    ->schema([
                        Select::make('featured_project_ids')
                            ->label('Featured projects')
                            ->multiple()
                            ->options(fn () => PortfolioProject::orderBy('title')->pluck('title', 'id'))
                            ->preload()
                            ->helperText('These projects will be included in the homepage API payload.'),
                    ]),
                Section::make('Meta')
                    ->columnSpanFull()
                    ->schema([
                        KeyValue::make('meta')
                            ->keyLabel('Key')
                            ->valueLabel('Value')
                            ->addButtonLabel('Add meta entry'),
                    ]),
            ]);
    }
}
