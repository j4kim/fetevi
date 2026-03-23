<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
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
                TextInput::make('template')
                    ->required(),
                Repeater::make('articles')
                    ->schema([
                        TextInput::make('title'),
                        RichEditor::make('content')
                            ->json(),
                    ])
                    ->columnSpanFull(),
                RichEditor::make('header')
                    ->json()
                    ->columnSpanFull(),
                RichEditor::make('footer')
                    ->json()
                    ->columnSpanFull(),
                Toggle::make('is_active'),
            ]);
    }
}
