<?php

namespace App\Filament\Resources\MyHideoutResource\Pages;

use App\Filament\Resources\MyHideoutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyHideout extends CreateRecord
{
    protected static string $resource = MyHideoutResource::class;
}
