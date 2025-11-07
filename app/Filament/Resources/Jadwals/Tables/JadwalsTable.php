<?php

namespace App\Filament\Resources\Jadwals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

use function Laravel\Prompts\text;

class JadwalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('thn_akademik')->label('Tahun Akademik')->sortable()->searchable()->toggleable(),
                TextColumn::make('gelombang')->label('Gelombang')->sortable()->searchable()->toggleable(),
                TextColumn::make('awal_daftar')->label('Awal Pendaftaran')->date()->sortable()->toggleable(),
                TextColumn::make('akhir_daftar')->label('Akhir Pendaftaran')->date()->sortable()->toggleable(),
                TextColumn::make('awal_bayar')->label('Awal Pembayaran')->date()->sortable()->toggleable(),
                TextColumn::make('akhir_bayar')->label('Akhir Pembayaran')->date()->sortable()->toggleable(),
                TextColumn::make('awal_pengambilan')->label('Awal Pengambilan Toga & Undangan')->date()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('akhir_pengambilan')->label('Akhir Pengambilan Toga & Undangan')->date()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('tgl_gladi')->label('Tanggal Gladi Resik')->date()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('awal_pelaksanaan')->label('Awal Pelaksanaan')->date()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('akhir_pelaksanaan')->label('Akhir Pelaksanaan')->date()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('tempat_pelaksanaan')->label('Tempat Pelaksanaan')->sortable()->searchable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
