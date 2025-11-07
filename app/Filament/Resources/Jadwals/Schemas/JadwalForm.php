<?php

namespace App\Filament\Resources\Jadwals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class JadwalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('thn_akademik')
                    ->required()
                    ->maxLength(255),
                TextInput::make('gelombang')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('awal_daftar')
                    ->label('Awal Pendaftaran')
                    ->required(),
                DatePicker::make('akhir_daftar')
                    ->label('Akhir Pendaftaran')
                    ->required(),
                DatePicker::make('awal_bayar')
                    ->label('Awal Pembayaran')
                    ->required(),
                DatePicker::make('akhir_bayar')
                    ->label('Akhir Pembayaran')
                    ->required(),
                DatePicker::make('awal_pelaksanaan')
                    ->label('Awal Pelaksanaan')
                    ->required(),
                DatePicker::make('akhir_pelaksanaan')
                    ->label('Akhir Pelaksanaan')
                    ->required(),
                DatePicker::make('awal_pengambilan')
                    ->label('Awal Pengambilan Toga & Undangan')
                    ->required(),
                DatePicker::make('akhir_pengambilan')
                    ->label('Akhir Pengambilan Toga & Undangan')
                    ->required(),
                DatePicker::make('tgl_gladi')
                    ->label('Tanggal Gladi Resik')
                    ->required(),
                TextInput::make('tempat_pelaksanaan')
                    ->label('Tempat Pelaksanaan')
                    ->required(),

                // Grid::make(2)
                // ->schema([
                // Section::make('Details')
                //     ->schema([
                //         TextInput::make('name'),
                //         Select::make('position')
                //             ->options([
                //                 'developer' => 'Developer',
                //                 'designer' => 'Designer',
                //             ]),
                //         Checkbox::make('is_admin'),
                //     ]),
                // Section::make('Auditing')
                //     ->schema([
                //         TextEntry::make('created_at')
                //             ->dateTime(),
                //         TextEntry::make('updated_at')
                //             ->dateTime(),
                //     ]),
                // ]),
            ]);
    }
}
