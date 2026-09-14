<?php

namespace App\Filament\Resources\ClassArchetypes\Pages;

use App\Filament\Resources\ClassArchetypes\ClassArchetypeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewClassArchetype extends ViewRecord
{
    protected static string $resource = ClassArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
