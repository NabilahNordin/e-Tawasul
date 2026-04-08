<?php

namespace App\Filament\Resources\PublicUsers\Pages;

use App\Filament\Resources\PublicUsers\PublicUserResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditPublicUser extends EditRecord
{
    protected static string $resource = PublicUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
