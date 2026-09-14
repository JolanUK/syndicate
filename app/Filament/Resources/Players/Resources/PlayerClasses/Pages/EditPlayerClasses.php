<?php

namespace App\Filament\Resources\Players\Resources\PlayerClasses\Pages;

use App\Filament\Resources\Players\Resources\PlayerClasses\PlayerClassesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlayerClasses extends EditRecord
{
    protected static string $resource = PlayerClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
