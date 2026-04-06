<?php

namespace App\Filament\Resources\GuardianConsents\Pages;

use App\Filament\Resources\GuardianConsents\GuardianConsentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditGuardianConsent extends EditRecord
{
    protected static string $resource = GuardianConsentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
