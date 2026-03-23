<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                Textarea::make('articles')
                    ->columnSpanFull(),
                Textarea::make('header')
                    ->columnSpanFull(),
                Textarea::make('footer')
                    ->columnSpanFull(),
                Toggle::make('is_active'),
            ]);
    }
}
