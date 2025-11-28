<?php

namespace App\Filament\Resources\JadwalDetails\Schemas;

use App\Models\ApiData;
use DateTime;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;

use function Laravel\Prompts\select;

class JadwalDetailForm
{
    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                Select::make('prodi_id')
                    ->relationship('prodi', 'nama_prodi')
                    ->searchable()
                    ->preload()
                    ->required(),
                DatePicker::make('tgl_undangan')
                    ->required(),
                DatePicker::make('tgl_toga')
                    ->required(),
                TextInput::make('tempat_ambil')
                    ->required(),
                DatePicker::make('tanggal_pelaksanaan')
                    ->required(),
                Select::make('sesi_id')
                    ->relationship('sesi', 'id')
                    ->searchable()
                    ->preload()
                    // ->createOptionForm([
                    //     TextInput::make('sesi')
                    //         ->required(),
                    //     DateTimePicker::make('tanggal_mulai')
                    //         ->required(),
                    //     DateTimePicker::make('tanggal_akhir')
                    //         ->required(),
                    //     ])
                        ,
            ]);
    }
}
