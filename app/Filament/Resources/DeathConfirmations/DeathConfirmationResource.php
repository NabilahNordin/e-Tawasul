<?php

namespace App\Filament\Resources\DeathConfirmations;

use App\Filament\Resources\DeathConfirmations\Pages\CreateDeathConfirmation;
use App\Filament\Resources\DeathConfirmations\Pages\EditDeathConfirmation;
use App\Filament\Resources\DeathConfirmations\Pages\ListDeathConfirmations;
use App\Filament\Resources\DeathConfirmations\Schemas\DeathConfirmationForm;
use App\Filament\Resources\DeathConfirmations\Tables\DeathConfirmationsTable;
use App\Models\DeathConfirmation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeathConfirmationResource extends Resource
{
    protected static ?string $model = DeathConfirmation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Death Confirmation';

    public static function form(Schema $schema): Schema
    {
        return DeathConfirmationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DeathConfirmationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDeathConfirmations::route('/'),
            'create' => CreateDeathConfirmation::route('/create'),
            'edit' => EditDeathConfirmation::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
