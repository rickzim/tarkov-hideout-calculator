<?php

namespace App\Filament\Resources\UpgradeResource\Pages;

use App\Filament\Resources\UpgradeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpgrades extends ListRecords
{
    protected static string $resource = UpgradeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
