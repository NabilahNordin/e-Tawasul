<?php

namespace App\Filament\Resources\LDMS;

use App\Filament\Resources\LDMS\Pages\CreateLDMS;
use App\Filament\Resources\LDMS\Pages\EditLDMS;
use App\Filament\Resources\LDMS\Pages\ListLDMS;
use App\Filament\Resources\LDMS\Schemas\LDMSForm;
use App\Filament\Resources\LDMS\Tables\LDMSTable;
use App\Models\LDMS;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LDMSResource extends Resource
{
    protected static ?string $model = LDMS::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'LDMS';

    public static function form(Schema $schema): Schema
    {
        return LDMSForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LDMSTable::configure($table);
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
            'index' => ListLDMS::route('/'),
            'create' => CreateLDMS::route('/create'),
            'edit' => EditLDMS::route('/{record}/edit'),
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
