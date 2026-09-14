<?php

namespace App\Filament\Resources\ClassSkills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassSkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
