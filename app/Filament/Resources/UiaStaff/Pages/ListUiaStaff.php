<?php

namespace App\Filament\Resources\UiaStaff\Pages;

use App\Filament\Resources\UiaStaff\UiaStaffResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUiaStaff extends ListRecords
{
    protected static string $resource = UiaStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
