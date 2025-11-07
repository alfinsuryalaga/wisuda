<?php

namespace App\Filament\Resources\Sesis\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SesiInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sesi'),
                TextEntry::make('tanggal_mulai')
                    ->dateTime(),
                TextEntry::make('tanggal_akhir')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
