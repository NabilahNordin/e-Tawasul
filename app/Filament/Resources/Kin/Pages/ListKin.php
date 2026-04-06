<?php

namespace App\Filament\Resources\Kin\Pages;

use App\Filament\Resources\Kin\KinResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKin extends ListRecords
{
    protected static string $resource = KinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
