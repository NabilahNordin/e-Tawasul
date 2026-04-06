<?php

namespace App\Filament\Resources\GuardianConsents;

use App\Filament\Resources\GuardianConsents\Pages\CreateGuardianConsent;
use App\Filament\Resources\GuardianConsents\Pages\EditGuardianConsent;
use App\Filament\Resources\GuardianConsents\Pages\ListGuardianConsents;
use App\Filament\Resources\GuardianConsents\Schemas\GuardianConsentForm;
use App\Filament\Resources\GuardianConsents\Tables\GuardianConsentsTable;
use App\Models\GuardianConsent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuardianConsentResource extends Resource
{
    protected static ?string $model = GuardianConsent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return GuardianConsentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GuardianConsentsTable::configure($table);
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
            'index' => ListGuardianConsents::route('/'),
            'create' => CreateGuardianConsent::route('/create'),
            'edit' => EditGuardianConsent::route('/{record}/edit'),
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
