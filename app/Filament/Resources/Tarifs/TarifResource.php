<?php

namespace App\Filament\Resources\Tarifs;

use App\Filament\Resources\Tarifs\Pages\CreateTarif;
use App\Filament\Resources\Tarifs\Pages\EditTarif;
use App\Filament\Resources\Tarifs\Pages\ListTarifs;
use App\Filament\Resources\Tarifs\Pages\ViewTarif;
use App\Filament\Resources\Tarifs\Schemas\TarifForm;
use App\Filament\Resources\Tarifs\Schemas\TarifInfolist;
use App\Filament\Resources\Tarifs\Tables\TarifsTable;
use App\Models\Tarif;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TarifResource extends Resource
{
    protected static ?string $model = Tarif::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Tarif';
    protected static ?string $navigationLabel = 'Tarif';
    protected static ?string $pluralModelLabel = 'Tarif';
    protected static ?string $modelLabel = 'Tarif';
    protected static string|UnitEnum|null $navigationGroup = 'Pengaturan';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return TarifForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TarifInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TarifsTable::configure($table);
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
            'index' => ListTarifs::route('/'),
            'create' => CreateTarif::route('/create'),
            'view' => ViewTarif::route('/{record}'),
            'edit' => EditTarif::route('/{record}/edit'),
        ];
    }
}
