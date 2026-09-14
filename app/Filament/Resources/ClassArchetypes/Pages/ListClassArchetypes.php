<?php

namespace App\Filament\Resources\ClassArchetypes\Pages;

use App\Filament\Resources\ClassArchetypes\ClassArchetypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClassArchetypes extends ListRecords
{
    protected static string $resource = ClassArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
