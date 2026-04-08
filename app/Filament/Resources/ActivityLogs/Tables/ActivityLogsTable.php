<?php

namespace App\Filament\Resources\ActivityLogs\Tables;

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

class ActivityLogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('User_ID')
                    ->label('User ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('Action')
                    ->label('Action')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'Login'   => 'success',
                        'Logout'  => 'gray',
                        'Create'  => 'info',
                        'Update'  => 'warning',
                        'Delete'  => 'danger',
                        'View'    => 'primary',
                        default   => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('Timestamp')
                    ->label('Timestamp')
                    ->date()
                    ->sortable(),

                TextColumn::make('IP_Address')
                    ->label('IP Address')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('Action_Description')
                    ->label('Action Description')
                    ->searchable()
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

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
                SelectFilter::make('Action')
                    ->options([
                        'Login'   => 'Login',
                        'Logout'  => 'Logout',
                        'Create'  => 'Create',
                        'Update'  => 'Update',
                        'Delete'  => 'Delete',
                        'View'    => 'View',
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
