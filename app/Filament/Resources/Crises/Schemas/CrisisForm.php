<?php

namespace App\Filament\Resources\Crises\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CrisisForm
{
    // public static function configure(Schema $schema): Schema
    // {
    //     return $schema
    //         ->components([

    //             TextInput::make('Crisis_Type')
    //                 ->maxLength(255),

    //             Textarea::make('Crisis_Description')
    //                 ->columnSpanFull(),

    //             Select::make('Crisis_Severity')
    //                 ->options([
    //                     'Low' => 'Low',
    //                     'Medium' => 'Medium',
    //                     'High' => 'High',
    //                     'Critical' => 'Critical',
    //                 ]),

    //             Select::make('Impact_level')
    //                 ->options([
    //                     'Minor' => 'Minor',
    //                     'Moderate' => 'Moderate',
    //                     'Severe' => 'Severe',
    //                 ]),

    //             TextInput::make('Location'),

    //             DateTimePicker::make('Date_Reported')
    //                 ->seconds(false),

    //             Select::make('Status')
    //                 ->options([
    //                     'Open' => 'Open',
    //                     'Investigating' => 'Investigating',
    //                     'Resolved' => 'Resolved',
    //                     'Closed' => 'Closed',
    //                 ]),
    //         ]);
    // }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Crisis Report Submission')
                    ->description('Screen 3: Report Emergency or Crisis')
                    ->schema([

                        // Info banner
                        TextEntry::make('info')
                            ->state('Your report will be securely submitted and verified by university staff. All information is confidential and handled with care.')
                            ->extraAttributes([
                                'class' => 'bg-warning-50 border border-warning-200 rounded-lg p-4 text-sm text-warning-800'
                            ]),

                        Section::make()->schema([

                            TextInput::make('student_id')
                                ->label('Student ID / Matric Number')
                                ->placeholder('e.g., A20EC0123')
                                ->required(),

                            Select::make('crisis_type')
                                ->label('Crisis Type')
                                ->placeholder('Select Crisis Type')
                                ->options([
                                    'fire' => 'Fire',
                                    'accident' => 'Accident',
                                    'medical' => 'Medical Emergency',
                                    'security' => 'Security Threat',
                                ])
                                ->required(),

                        ]),

                        // Severity (radio like UI)
                        Radio::make('severity_level')
                            ->label('Severity Level')
                            ->options([
                                'low' => 'Low',
                                'medium' => 'Medium',
                                'high' => 'High / Critical',
                            ])
                            ->inline()
                            ->required(),

                        TextInput::make('location')
                            ->label('Location')
                            ->placeholder('e.g., Campus Library, Hostel Block A, Off-campus')
                            ->required(),

                        Textarea::make('crisis_details')
                            ->label('Crisis Details')
                            ->rows(4)
                            ->required()
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull()
            ]);
    }
}
