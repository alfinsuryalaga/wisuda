<?php

namespace App\Filament\Resources\Sesis\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SesiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sesi')
                    ->required(),
                DateTimePicker::make('tanggal_mulai')
                    ->required(),
                DateTimePicker::make('tanggal_akhir')
                    ->required(),
            ]);
    }
}
