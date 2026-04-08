<?php

namespace App\Filament\Resources\DeathConfirmations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DeathConfirmationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Kin_ID')
                    ->label('Kin ID')
                    ->numeric(),

                TextInput::make('Student_ID')
                    ->label('Student ID')
                    ->numeric(),

                DatePicker::make('Date_Confirmed')
                    ->label('Date Confirmed'),

                TextInput::make('Verified_By_Kin')
                    ->label('Verified By Kin')
                    ->maxLength(255),

                Textarea::make('Admin_Comments')
                    ->label('Admin Comments')
                    ->columnSpanFull(),
            ]);
    }
}
