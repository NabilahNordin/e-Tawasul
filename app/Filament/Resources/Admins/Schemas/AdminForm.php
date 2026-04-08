<?php

namespace App\Filament\Resources\Admins\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Admin_Name')
                    ->label('Admin Name')
                    ->maxLength(255),

                TextInput::make('Email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),

                Select::make('Role')
                    ->label('Role')
                    ->options([
                        'Super Admin' => 'Super Admin',
                        'Admin'       => 'Admin',
                        'Moderator'   => 'Moderator',
                    ]),

                Textarea::make('Permissions')
                    ->label('Permissions')
                    ->columnSpanFull(),
            ]);
    }
}
