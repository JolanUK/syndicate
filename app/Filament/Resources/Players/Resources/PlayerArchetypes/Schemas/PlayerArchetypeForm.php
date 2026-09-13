<?php

namespace App\Filament\Resources\Players\Resources\PlayerArchetypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlayerArchetypeForm
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
