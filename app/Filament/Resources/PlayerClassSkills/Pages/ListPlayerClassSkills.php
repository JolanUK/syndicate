<?php

namespace App\Filament\Resources\PlayerClassSkills\Pages;

use App\Filament\Resources\PlayerClassSkills\PlayerClassSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlayerClassSkills extends ListRecords
{
    protected static string $resource = PlayerClassSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
