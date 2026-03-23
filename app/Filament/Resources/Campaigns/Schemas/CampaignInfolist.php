<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CampaignInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('name'),
                TextEntry::make('title'),
                TextEntry::make('description')
                    ->placeholder('-'),
                TextEntry::make('template'),
                TextEntry::make('articles')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('header')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('footer')
                    ->placeholder('-')
                    ->columnSpanFull(),
                IconEntry::make('is_active')
                    ->boolean()
                    ->placeholder('-'),
            ]);
    }
}
