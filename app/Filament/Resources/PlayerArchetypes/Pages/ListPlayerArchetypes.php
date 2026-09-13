<?php

namespace App\Filament\Resources\PlayerArchetypes\Pages;

use App\Filament\Resources\PlayerArchetypes\PlayerArchetypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlayerArchetypes extends ListRecords
{
    protected static string $resource = PlayerArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
