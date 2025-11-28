<?php

namespace App\Filament\Resources\Jadwals\RelationManagers;

use App\Filament\Resources\Tarifs\TarifResource;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TarifRelationManager extends RelationManager
{
    protected static string $relationship = 'tarif';

    public function form(Schema $schema): Schema
    {
        return TarifResource::form($schema);
    }

    public function table(Table $table): Table
    {
        return TarifResource::table($table);
    }
}
