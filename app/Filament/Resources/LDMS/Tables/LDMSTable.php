<?php

namespace App\Filament\Resources\LDMS\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class LDMSTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Confirmation_ID')
                    ->label('Confirmation ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('Student_ID')
                    ->label('Student ID')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('Date_Triggered')
                    ->label('Date Triggered')
                    ->date()
                    ->sortable(),

                TextColumn::make('Triggered_By_Kin')
                    ->label('Triggered By Kin')
                    ->searchable(),

                TextColumn::make('Message_Content')
                    ->label('Message Content')
                    ->searchable()
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('Media_Type')
                    ->label('Media Type')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'image'    => 'info',
                        'video'    => 'warning',
                        'audio'    => 'success',
                        'document' => 'primary',
                        default    => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('Media_File_Name')
                    ->label('Media File Name')
                    ->searchable(),

                TextColumn::make('Media_File_Size')
                    ->label('Media File Size')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('Media_File_Path')
                    ->label('Media File Path')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('Encrypted')
                    ->label('Encrypted')
                    ->boolean(),

                TextColumn::make('Blockchain_Reference')
                    ->label('Blockchain Reference')
                    ->searchable()
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
