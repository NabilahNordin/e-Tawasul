<?php

namespace App\Filament\Resources\UiaStaff\Pages;

use App\Filament\Resources\UiaStaff\UiaStaffResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditUiaStaff extends EditRecord
{
    protected static string $resource = UiaStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
