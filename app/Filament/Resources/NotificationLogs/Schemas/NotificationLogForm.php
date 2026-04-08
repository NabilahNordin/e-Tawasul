<?php

namespace App\Filament\Resources\NotificationLogs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NotificationLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Kin_ID')
                    ->label('Kin ID')
                    ->numeric(),

                TextInput::make('Lecturer_ID')
                    ->label('Lecturer ID')
                    ->numeric(),

                TextInput::make('Crisis_ID')
                    ->label('Crisis ID')
                    ->numeric(),

                TextInput::make('LDMS_ID')
                    ->label('LDMS ID')
                    ->numeric(),

                Select::make('Notification_Type')
                    ->label('Notification Type')
                    ->options([
                        'Email'    => 'Email',
                        'SMS'      => 'SMS',
                        'Push'     => 'Push',
                        'In-App'   => 'In-App',
                    ]),

                Textarea::make('Notification_Message')
                    ->label('Notification Message')
                    ->columnSpanFull(),

                TextInput::make('Timestamp')
                    ->label('Timestamp')
                    ->maxLength(255),
            ]);
    }
}
