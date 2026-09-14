<?php

namespace App\Filament\Resources\PlayerClassArchetypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlayerClassArchetypeForm
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
