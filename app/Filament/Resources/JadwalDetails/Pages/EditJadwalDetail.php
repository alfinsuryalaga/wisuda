<?php

namespace App\Filament\Resources\JadwalDetails\Pages;

use App\Filament\Resources\JadwalDetails\JadwalDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJadwalDetail extends EditRecord
{
    protected static string $resource = JadwalDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
