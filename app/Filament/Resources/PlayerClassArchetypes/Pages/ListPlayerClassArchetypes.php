<?php

namespace App\Filament\Resources\PlayerClassArchetypes\Pages;

use App\Filament\Resources\PlayerClassArchetypes\PlayerClassArchetypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlayerClassArchetypes extends ListRecords
{
    protected static string $resource = PlayerClassArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
