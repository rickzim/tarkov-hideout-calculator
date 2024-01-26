<?php

namespace App\Filament\Resources\TraderResource\Pages;

use App\Filament\Resources\TraderResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTraders extends ManageRecords
{
    protected static string $resource = TraderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
