<?php

namespace App\Filament\Resources\JadwalDetails\Pages;

use App\Filament\Resources\JadwalDetails\JadwalDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJadwalDetails extends ListRecords
{
    protected static string $resource = JadwalDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
