<?php

namespace App\Filament\Resources\PlayerClassArchetypes\Schemas;

use App\Models\PlayerClassSkill;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlayerClassArchetypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->columnSpanFull()
                    ->image()
                    ->imageEditor(),
                TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),
                Repeater::make('passives')
                    ->columnSpanFull()
                    ->label('Passives')
                    ->live()
                    ->schema([
                        Select::make('class')
                            ->options(PlayerClassSkill::pluck('name', 'id'))
                            ->searchable()
                            ->required(),
                        TextInput::make('modifier')
                            ->label('Modifier')
                            ->suffix('%'),
                    ])
                    ->columns(2),
            ]);
    }
}
