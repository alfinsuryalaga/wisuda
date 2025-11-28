<?php

namespace App\Filament\Resources\Bukus\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class BukuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_buku')
                    ->required(),
                FileUpload::make('attachment')
                    ->label('File Buku')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(20000),
            ]);
    }
}
