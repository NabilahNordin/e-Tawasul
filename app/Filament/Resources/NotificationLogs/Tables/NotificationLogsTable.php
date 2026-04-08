<?php

namespace App\Filament\Resources\NotificationLogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class NotificationLogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Kin_ID')
                    ->label('Kin ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('Lecturer_ID')
                    ->label('Lecturer ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('Crisis_ID')
                    ->label('Crisis ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('LDMS_ID')
                    ->label('LDMS ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('Notification_Type')
                    ->label('Notification Type')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'Email'  => 'info',
                        'SMS'    => 'success',
                        'Push'   => 'warning',
                        'In-App' => 'primary',
                        default  => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('Notification_Message')
                    ->label('Notification Message')
                    ->searchable()
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('Timestamp')
                    ->label('Timestamp')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('Notification_Type')
                    ->label('Notification Type')
                    ->options([
                        'Email'  => 'Email',
                        'SMS'    => 'SMS',
                        'Push'   => 'Push',
                        'In-App' => 'In-App',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
