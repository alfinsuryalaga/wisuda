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
                Select::make('tingkat_id')
                    ->relationship('tingkat', 'nama_tingkat')
                    ->required(),
                TextInput::make('tarif'),
            ]);
    }
}
