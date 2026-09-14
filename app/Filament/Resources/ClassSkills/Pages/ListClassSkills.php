<?php

namespace App\Filament\Resources\ClassSkills\Pages;

use App\Filament\Resources\ClassSkills\ClassSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClassSkills extends ListRecords
{
    protected static string $resource = ClassSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
