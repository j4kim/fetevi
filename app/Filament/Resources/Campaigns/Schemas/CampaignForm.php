<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use App\Models\Campaign;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CampaignForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description'),
                Select::make('theme')
                    ->options(Campaign::themeOptions())
                    ->required(),
                Toggle::make('is_active'),

                Repeater::make('articles')
                    ->schema([
                        TextInput::make('title'),
                        MarkdownEditor::make('content'),
                    ])
                    ->columnSpanFull(),

                Section::make('Header/Footer')->schema([
                    MarkdownEditor::make('header'),
                    MarkdownEditor::make('footer'),
                ])
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columnSpanFull(),
            ]);
    }
}
