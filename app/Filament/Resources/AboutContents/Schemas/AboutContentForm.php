<?php

namespace App\Filament\Resources\AboutContents\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Section::make('Profile')
                    ->schema([
                        TextInput::make('headline')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('subheadline')
                            ->columnSpanFull(),
                        TextInput::make('slug')
                            ->helperText('Used by the API to look up the about page content.')
                            ->required(),
                        TextInput::make('location')
                            ->maxLength(255),
                        TextInput::make('years_experience')
                            ->numeric()
                            ->minValue(0)
                            ->label('Years of experience'),
                        TextInput::make('avatar_url')
                            ->label('Avatar URL')
                            ->columnSpanFull(),
                        RichEditor::make('bio')
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(1),
                Section::make('Skills & Meta')
                    ->schema([
                        TagsInput::make('skills')
                            ->suggestions([
                                'Laravel',
                                'Filament',
                                'Livewire',
                                'Vue',
                                'React',
                                'Design Systems',
                            ])
                            ->placeholder('Add a skill and press enter'),
                        KeyValue::make('meta')
                            ->keyLabel('Key')
                            ->valueLabel('Value')
                            ->addButtonLabel('Add meta entry')
                            ->columnSpanFull(),
                    ]),
                Section::make('Calls to Action')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('primary_cta_label')
                            ->label('Primary CTA label'),
                        TextInput::make('primary_cta_url')
                            ->label('Primary CTA URL')
                            ->url(),
                        TextInput::make('secondary_cta_label')
                            ->label('Secondary CTA label'),
                        TextInput::make('secondary_cta_url')
                            ->label('Secondary CTA URL')
                            ->url(),
                    ]),
            ]);
    }
}
