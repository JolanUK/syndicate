<?php

namespace App\Filament\Resources\ClassSkills\Pages;

use App\Filament\Resources\ClassSkills\ClassSkillResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditClassSkill extends EditRecord
{
    protected static string $resource = ClassSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
