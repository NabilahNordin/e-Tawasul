<?php

namespace App\Filament\Resources\Kin;

use App\Filament\Resources\Kin\Pages\CreateKin;
use App\Filament\Resources\Kin\Pages\EditKin;
use App\Filament\Resources\Kin\Pages\ListKin;
use App\Filament\Resources\Kin\Schemas\KinForm;
use App\Filament\Resources\Kin\Tables\KinTable;
use App\Models\Kin;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KinResource extends Resource
{
    protected static ?string $model = Kin::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return KinForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KinTable::configure($table);
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
            'index' => ListKin::route('/'),
            'create' => CreateKin::route('/create'),
            'edit' => EditKin::route('/{record}/edit'),
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
