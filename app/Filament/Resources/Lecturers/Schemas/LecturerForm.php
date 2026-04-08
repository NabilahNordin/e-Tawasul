<?php

namespace App\Filament\Resources\Lecturers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LecturerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('First_Name')
                    ->label('First Name')
                    ->maxLength(255),

                TextInput::make('Last_Name')
                    ->label('Last Name')
                    ->maxLength(255),

                TextInput::make('Email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),

                TextInput::make('Department')
                    ->label('Department')
                    ->maxLength(255),
            ]);
    }
}
