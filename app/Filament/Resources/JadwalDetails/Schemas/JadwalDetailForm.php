<?php

namespace App\Filament\Resources\JadwalDetails\Schemas;

use DateTime;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;

class JadwalDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jadwal_id')
                    ->label('Tahun Akademik')
                    ->relationship('jadwal', 'thn_akademik')
                    ->required(),
                Select::make('jadwal_id')
                    ->label('Gelombang')
                    ->relationship('jadwal', 'gelombang')
                    ->required(),
                TextInput::make('tingkat')
                    ->required(),
                TextInput::make('prodi')
                    ->required(),
                Select::make('sesi_id')
                    ->relationship('sesi', 'id')
                    ->required()
                    ->createOptionForm([
                TextInput::make('sesi')
                    ->required(),
                DateTimePicker::make('tanggal_mulai')
                    ->required(),
                DateTimePicker::make('tanggal_akhir')
                    ->required(),
                ]),
                DatePicker::make('tgl_undangan')
                    ->required(),
                DatePicker::make('tgl_toga')
                    ->required(),
                TextInput::make('tempat_ambil')
                    ->required(),
                DatePicker::make('tanggal_pelaksanaan')
                    ->required(),
            ]);
    }
}
