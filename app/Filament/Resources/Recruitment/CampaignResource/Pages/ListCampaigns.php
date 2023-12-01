<?php

namespace App\Filament\Resources\Recruitment\CampaignResource\Pages;

use App\Filament\Resources\Recruitment\CampaignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCampaigns extends ListRecords
{
    protected static string $resource = CampaignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
