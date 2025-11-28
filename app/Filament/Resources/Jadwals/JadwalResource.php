<?php

namespace App\Filament\Resources\Jadwals;

use App\Filament\Resources\Jadwals\Pages\CreateJadwal;
use App\Filament\Resources\Jadwals\Pages\EditJadwal;
use App\Filament\Resources\Jadwals\Pages\ListJadwals;
use App\Filament\Resources\Jadwals\Pages\ViewJadwal;
use App\Filament\Resources\Jadwals\Schemas\JadwalForm;
use App\Filament\Resources\Jadwals\Schemas\JadwalInfolist;
use App\Filament\Resources\Jadwals\Tables\JadwalsTable;
use App\Models\ApiData;
use App\Models\Jadwal;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;
    protected static ?string $model1 = ApiData::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDateRange;
    protected static string | BackedEnum | null $activeNavigationIcon = 'heroicon-s-calendar-date-range';

    protected static ?string $recordTitleAttribute = 'Jadwal';

    protected static ?string $navigationLabel = 'Jadwal';

    protected static string | UnitEnum | null $navigationGroup = 'Pengaturan';



    public static function form(Schema $schema): Schema
    {
        return JadwalForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JadwalInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\JadwalDetailsRelationManager::class,
            RelationManagers\TarifRelationManager::class,
            RelationManagers\SesiRelationManager::class,
            RelationManagers\BukuRelationManager::class,

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJadwals::route('/'),
            'create' => CreateJadwal::route('/create'),
            'view' => ViewJadwal::route('/{record}'),
            'edit' => EditJadwal::route('/{record}/edit'),
        ];
    }


}
