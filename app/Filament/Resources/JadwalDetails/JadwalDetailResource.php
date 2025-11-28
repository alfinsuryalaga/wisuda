<?php

namespace App\Filament\Resources\JadwalDetails;

use UnitEnum;
use BackedEnum;
use App\Models\ApiData;
use Filament\Tables\Table;
use App\Models\JadwalDetail;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\JadwalDetails\Pages\EditJadwalDetail;
use App\Filament\Resources\JadwalDetails\Pages\ListJadwalDetails;
use App\Filament\Resources\JadwalDetails\Pages\CreateJadwalDetail;
use App\Filament\Resources\JadwalDetails\Schemas\JadwalDetailForm;
use App\Filament\Resources\JadwalDetails\Tables\JadwalDetailsTable;

class JadwalDetailResource extends Resource
{
    protected static ?string $model = JadwalDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Detail Jadwal';

    protected static string | UnitEnum | null $navigationGroup = 'Pengaturan';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return JadwalDetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalDetailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJadwalDetails::route('/'),
            'create' => CreateJadwalDetail::route('/create'),
            'edit' => EditJadwalDetail::route('/{record}/edit'),
        ];
    }
}
