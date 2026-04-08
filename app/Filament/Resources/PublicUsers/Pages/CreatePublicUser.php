<?php

namespace App\Filament\Resources\PublicUsers\Pages;

use App\Filament\Resources\PublicUsers\PublicUserResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePublicUser extends CreateRecord
{
    protected static string $resource = PublicUserResource::class;
}
