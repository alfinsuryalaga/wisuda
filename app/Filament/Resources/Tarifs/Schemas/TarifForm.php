<?php

namespace App\Filament\Resources\Tarifs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

use PhpParser\Node\Stmt\Label;
use function Laravel\Prompts\select;

class TarifForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jadwal_id')
                    ->relationship('jadwal', 'id')
                    ->required()
                    ->Label('Jadwal'),
                Select::make('thn_akademik')
                    ->relationship('jadwal', 'thn_akademik')
                    ->required()
                    ->Label('Tahun Akademik'),
                Select::make('gelombang')
                    ->relationship('jadwal', 'gelombang')
                    ->required()
                    ->Label('Gelombang'),
                Select::make('tingkat')
                ->options([
                        'A' => 'Doktor',
                        'B' => 'Magister',
                        'C' => 'Sarjana',
                        'J' => 'Profesi',
                    ]),
                TextInput::make('tarif'),
            ]);
    }
}
