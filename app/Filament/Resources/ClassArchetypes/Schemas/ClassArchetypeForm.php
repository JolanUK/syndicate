<?php

namespace App\Filament\Resources\ClassArchetypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassArchetypeForm
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
