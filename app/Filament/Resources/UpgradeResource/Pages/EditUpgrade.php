<?php

namespace App\Filament\Resources\UpgradeResource\Pages;

use App\Filament\Resources\UpgradeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpgrade extends EditRecord
{
    protected static string $resource = UpgradeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
