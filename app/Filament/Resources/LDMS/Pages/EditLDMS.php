<?php

namespace App\Filament\Resources\LDMS\Pages;

use App\Filament\Resources\LDMS\LDMSResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditLDMS extends EditRecord
{
    protected static string $resource = LDMSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
