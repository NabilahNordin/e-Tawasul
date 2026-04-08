<?php

namespace App\Filament\Resources\DeathConfirmations\Pages;

use App\Filament\Resources\DeathConfirmations\DeathConfirmationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditDeathConfirmation extends EditRecord
{
    protected static string $resource = DeathConfirmationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
