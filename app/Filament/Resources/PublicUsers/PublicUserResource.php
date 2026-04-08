<?php

namespace App\Filament\Resources\PublicUsers;

use App\Filament\Resources\PublicUsers\Pages\CreatePublicUser;
use App\Filament\Resources\PublicUsers\Pages\EditPublicUser;
use App\Filament\Resources\PublicUsers\Pages\ListPublicUsers;
use App\Filament\Resources\PublicUsers\Schemas\PublicUserForm;
use App\Filament\Resources\PublicUsers\Tables\PublicUsersTable;
use App\Models\PublicUser;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicUserResource extends Resource
{
    protected static ?string $model = PublicUser::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return PublicUserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PublicUsersTable::configure($table);
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
            'index' => ListPublicUsers::route('/'),
            'create' => CreatePublicUser::route('/create'),
            'edit' => EditPublicUser::route('/{record}/edit'),
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
