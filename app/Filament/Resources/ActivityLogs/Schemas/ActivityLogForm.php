<?php

namespace App\Filament\Resources\ActivityLogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ActivityLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('User_ID')
                    ->label('User ID')
                    ->numeric(),

                Select::make('Action')
                    ->label('Action')
                    ->options([
                        'Login'        => 'Login',
                        'Logout'       => 'Logout',
                        'Create'       => 'Create',
                        'Update'       => 'Update',
                        'Delete'       => 'Delete',
                        'View'         => 'View',
                    ]),

                DatePicker::make('Timestamp')
                    ->label('Timestamp'),

                TextInput::make('IP_Address')
                    ->label('IP Address')
                    ->maxLength(45),

                Textarea::make('Action_Description')
                    ->label('Action Description')
                    ->columnSpanFull(),
            ]);
    }
}
