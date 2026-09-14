<?php

namespace App\Filament\Resources\PlayerClassArchetypes\Pages;

use App\Filament\Resources\PlayerClassArchetypes\PlayerClassArchetypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlayerClassArchetype extends ViewRecord
{
    protected static string $resource = PlayerClassArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
