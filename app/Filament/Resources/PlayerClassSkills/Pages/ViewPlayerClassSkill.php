<?php

namespace App\Filament\Resources\PlayerClassSkills\Pages;

use App\Filament\Resources\PlayerClassSkills\PlayerClassSkillResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlayerClassSkill extends ViewRecord
{
    protected static string $resource = PlayerClassSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
