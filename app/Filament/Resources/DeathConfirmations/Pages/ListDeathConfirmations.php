<?php

namespace App\Filament\Resources\DeathConfirmations\Pages;

use App\Filament\Resources\DeathConfirmations\DeathConfirmationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDeathConfirmations extends ListRecords
{
    protected static string $resource = DeathConfirmationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
