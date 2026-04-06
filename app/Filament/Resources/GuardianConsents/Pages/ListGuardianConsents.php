<?php

namespace App\Filament\Resources\GuardianConsents\Pages;

use App\Filament\Resources\GuardianConsents\GuardianConsentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGuardianConsents extends ListRecords
{
    protected static string $resource = GuardianConsentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
