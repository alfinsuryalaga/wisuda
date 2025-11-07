<?php

namespace App\Filament\Resources\Tarifs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TarifInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('jadwal.id')
                    ->label('Jadwal'),
                TextEntry::make('thn_akademik')
                    ->placeholder('-'),
                TextEntry::make('gelombang')
                    ->placeholder('-'),
                TextEntry::make('tingkat')
                    ->placeholder('-'),
                TextEntry::make('tarif')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
