<?php

namespace App\Filament\Resources\PlayerArchetypes\Pages;

use App\Filament\Resources\PlayerArchetypes\PlayerArchetypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlayerArchetype extends ViewRecord
{
    protected static string $resource = PlayerArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
