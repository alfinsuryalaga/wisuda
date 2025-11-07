<?php

namespace App\Filament\Resources\Sesis;

use App\Filament\Resources\Sesis\Pages\CreateSesi;
use App\Filament\Resources\Sesis\Pages\EditSesi;
use App\Filament\Resources\Sesis\Pages\ListSesis;
use App\Filament\Resources\Sesis\Pages\ViewSesi;
use App\Filament\Resources\Sesis\Schemas\SesiForm;
use App\Filament\Resources\Sesis\Schemas\SesiInfolist;
use App\Filament\Resources\Sesis\Tables\SesisTable;
use App\Models\Sesi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SesiResource extends Resource
{
    protected static ?string $model = Sesi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Sesi';

    protected static ?string $navigationLabel = 'Sesi';
    
    protected static string | UnitEnum | null $navigationGroup = 'Pengaturan';

    public static function form(Schema $schema): Schema
    {
        return SesiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SesiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SesisTable::configure($table);
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
            'index' => ListSesis::route('/'),
            'create' => CreateSesi::route('/create'),
            'view' => ViewSesi::route('/{record}'),
            'edit' => EditSesi::route('/{record}/edit'),
        ];
    }
}
