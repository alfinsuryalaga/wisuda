<?php

namespace App\Filament\Resources\Jadwals\RelationManagers;

use App\Filament\Resources\Bukus\Tables\BukusTable;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\CreateAction;
use App\Filament\Resources\Bukus\Schemas\BukuForm;
use App\Filament\Resources\Jadwals\JadwalResource;
use Filament\Resources\RelationManagers\RelationManager;

class BukuRelationManager extends RelationManager
{
    protected static string $relationship = 'buku';


    public function table(Table $table): Table
    {
        return BukusTable::configure($table);
    }

    public function form(Schema $schema): Schema
    {
        return BukuForm::configure($schema);
    }
}
