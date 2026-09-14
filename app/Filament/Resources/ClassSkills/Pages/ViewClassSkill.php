<?php

namespace App\Filament\Resources\ClassSkills\Pages;

use App\Filament\Resources\ClassSkills\ClassSkillResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewClassSkill extends ViewRecord
{
    protected static string $resource = ClassSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
