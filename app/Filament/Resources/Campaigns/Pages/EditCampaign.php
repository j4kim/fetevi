<?php

namespace App\Filament\Resources\Campaigns\Pages;

use App\Filament\Resources\Campaigns\CampaignResource;
use App\Models\Campaign;
use Filament\Actions\Action;
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
            Action::make('Voir')
                ->url(fn(Campaign $campaign): string => route('campaign', [$campaign->name]))
                ->openUrlInNewTab()
                ->outlined(),
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

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
