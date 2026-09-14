<?php

namespace App\Filament\Resources\PlayerClassArchetypes\Pages;

use App\Filament\Resources\PlayerClassArchetypes\PlayerClassArchetypeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlayerClassArchetype extends EditRecord
{
    protected static string $resource = PlayerClassArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
