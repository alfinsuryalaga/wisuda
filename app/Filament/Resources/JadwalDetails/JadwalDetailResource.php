<?php

namespace App\Filament\Resources\JadwalDetails;

use App\Filament\Resources\JadwalDetails\Pages\CreateJadwalDetail;
use App\Filament\Resources\JadwalDetails\Pages\EditJadwalDetail;
use App\Filament\Resources\JadwalDetails\Pages\ListJadwalDetails;
use App\Filament\Resources\JadwalDetails\Schemas\JadwalDetailForm;
use App\Filament\Resources\JadwalDetails\Tables\JadwalDetailsTable;
use App\Models\JadwalDetail;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalDetailResource extends Resource
{
    protected static ?string $model = JadwalDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Detail Jadwal';
    
    protected static string | UnitEnum | null $navigationGroup = 'Pengaturan';

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
            //
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
