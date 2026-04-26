<?php

namespace App\Filament\Resources\UiaStaff\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UiaStaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('department'),
                TextInput::make('kcdiom_id'),
            ]);
    }
}
