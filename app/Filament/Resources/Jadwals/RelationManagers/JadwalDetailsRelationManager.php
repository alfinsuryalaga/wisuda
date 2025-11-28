<?php

namespace App\Filament\Resources\Jadwals\RelationManagers;

use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Actions\DissociateBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\JadwalDetails\Schemas\JadwalDetailForm;
use App\Filament\Resources\JadwalDetails\Tables\JadwalDetailsTable;

class JadwalDetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'jadwalDetails';

    public function form(Schema $schema): Schema
    {
        return JadwalDetailForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return JadwalDetailsTable::configure($table);
    }
}
