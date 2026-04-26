<?php

namespace App\Filament\Resources\UiaStaff;

use App\Filament\Resources\UiaStaff\Pages\CreateUiaStaff;
use App\Filament\Resources\UiaStaff\Pages\EditUiaStaff;
use App\Filament\Resources\UiaStaff\Pages\ListUiaStaff;
use App\Filament\Resources\UiaStaff\Schemas\UiaStaffForm;
use App\Filament\Resources\UiaStaff\Tables\UiaStaffTable;
use App\Models\UiaStaff;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UiaStaffResource extends Resource
{
    protected static ?string $model = UiaStaff::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return UiaStaffForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UiaStaffTable::configure($table);
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
            'index' => ListUiaStaff::route('/'),
            'create' => CreateUiaStaff::route('/create'),
            'edit' => EditUiaStaff::route('/{record}/edit'),
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
