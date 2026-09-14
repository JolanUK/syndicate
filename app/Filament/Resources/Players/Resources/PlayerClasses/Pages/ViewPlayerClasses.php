<?php

namespace App\Filament\Resources\Players\Resources\PlayerClasses\Pages;

use App\Filament\Resources\Players\Resources\PlayerClasses\PlayerClassesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlayerClasses extends ViewRecord
{
    protected static string $resource = PlayerClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
