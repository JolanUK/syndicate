<?php

namespace App\Filament\Resources\Players\RelationManagers;

use App\Filament\Resources\Players\Resources\PlayerClasses\PlayerClassesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class ClassesRelationManager extends RelationManager
{
    protected static string $relationship = 'classes';

    protected static ?string $relatedResource = PlayerClassesResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
