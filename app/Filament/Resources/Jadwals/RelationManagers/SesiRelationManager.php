<?php

namespace App\Filament\Resources\Jadwals\RelationManagers;

use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\CreateAction;
use App\Filament\Resources\Sesis\SesiResource;
use App\Filament\Resources\Jadwals\JadwalResource;
use Filament\Resources\RelationManagers\RelationManager;

class SesiRelationManager extends RelationManager
{
    protected static string $relationship = 'sesi';


     public function form(Schema $schema): Schema
    {
        return SesiResource::form($schema);
    }

    public function table(Table $table): Table
    {
        return SesiResource::table($table);
    }
}
