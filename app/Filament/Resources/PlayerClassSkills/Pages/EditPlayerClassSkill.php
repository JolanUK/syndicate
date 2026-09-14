<?php

namespace App\Filament\Resources\PlayerClassSkills\Pages;

use App\Filament\Resources\PlayerClassSkills\PlayerClassSkillResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlayerClassSkill extends EditRecord
{
    protected static string $resource = PlayerClassSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
