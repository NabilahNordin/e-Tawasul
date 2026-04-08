<?php

namespace App\Filament\Resources\LDMS\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LDMSForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Confirmation_ID')
                    ->label('Confirmation ID')
                    ->numeric(),

                TextInput::make('Student_ID')
                    ->label('Student ID')
                    ->numeric(),

                DatePicker::make('Date_Triggered')
                    ->label('Date Triggered'),

                TextInput::make('Triggered_By_Kin')
                    ->label('Triggered By Kin')
                    ->maxLength(255),

                Textarea::make('Message_Content')
                    ->label('Message Content')
                    ->columnSpanFull(),

                Select::make('Media_Type')
                    ->label('Media Type')
                    ->options([
                        'image' => 'Image',
                        'video' => 'Video',
                        'audio' => 'Audio',
                        'document' => 'Document',
                        'other' => 'Other',
                    ]),

                TextInput::make('Media_File_Path')
                    ->label('Media File Path')
                    ->maxLength(255),

                TextInput::make('Media_File_Name')
                    ->label('Media File Name')
                    ->maxLength(255),

                TextInput::make('Media_File_Size')
                    ->label('Media File Size')
                    ->maxLength(255),

                Toggle::make('Encrypted')
                    ->label('Encrypted'),

                TextInput::make('Blockchain_Reference')
                    ->label('Blockchain Reference')
                    ->maxLength(255),
            ]);
    }
}
