<?php

namespace App\Filament\Resources\PublicUsers\Pages;

use App\Filament\Resources\PublicUsers\PublicUserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPublicUsers extends ListRecords
{
    protected static string $resource = PublicUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
