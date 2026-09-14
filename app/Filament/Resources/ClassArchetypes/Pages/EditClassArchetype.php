<?php

namespace App\Filament\Resources\ClassArchetypes\Pages;

use App\Filament\Resources\ClassArchetypes\ClassArchetypeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditClassArchetype extends EditRecord
{
    protected static string $resource = ClassArchetypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
