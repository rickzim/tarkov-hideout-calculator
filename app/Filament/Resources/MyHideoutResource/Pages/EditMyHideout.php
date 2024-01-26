<?php

namespace App\Filament\Resources\MyHideoutResource\Pages;

use App\Filament\Resources\MyHideoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyHideout extends EditRecord
{
    protected static string $resource = MyHideoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
