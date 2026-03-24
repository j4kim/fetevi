<?php

namespace App\Filament\Resources\Campaigns\Pages;

use App\Filament\Resources\Campaigns\CampaignResource;
use App\Models\Campaign;
use Filament\Actions\DeleteAction;
use Filament\Actions\ReplicateAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Enums\Width;

class EditCampaign extends EditRecord
{
    protected static string $resource = CampaignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ReplicateAction::make()
                ->excludeAttributes(['id'])
                ->schema([
                    TextInput::make('name'),
                ])
                ->successRedirectUrl(function (Campaign $replica) {
                    return CampaignResource::getUrl('edit', ['record' => $replica]);
                })
                ->modalWidth(Width::Small),
            DeleteAction::make(),
        ];
    }
}
