<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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
                TextInput::make('description'),
                TextInput::make('theme')
                    ->required(),
                Repeater::make('articles')
                    ->schema([
                        TextInput::make('title'),
                        MarkdownEditor::make('content'),
                    ])
                    ->columnSpanFull(),
                MarkdownEditor::make('header')
                    ->columnSpanFull(),
                MarkdownEditor::make('footer')
                    ->columnSpanFull(),
                Toggle::make('is_active'),
            ]);
    }
}
