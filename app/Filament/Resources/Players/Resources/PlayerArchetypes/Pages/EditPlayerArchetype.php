<?php

namespace App\Filament\Resources\Players\Resources\PlayerArchetypes\Pages;

use App\Filament\Resources\Players\Resources\PlayerArchetypes\PlayerArchetypeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlayerArchetype extends EditRecord
{
    protected static string $resource = PlayerArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
