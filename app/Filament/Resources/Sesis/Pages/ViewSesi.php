<?php

namespace App\Filament\Resources\Sesis\Pages;

use App\Filament\Resources\Sesis\SesiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSesi extends ViewRecord
{
    protected static string $resource = SesiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
