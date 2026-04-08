<?php

namespace App\Filament\Resources\LDMS\Pages;

use App\Filament\Resources\LDMS\LDMSResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLDMS extends ListRecords
{
    protected static string $resource = LDMSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
