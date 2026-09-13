<?php

namespace App\Filament\Resources\Players\Resources\PlayerArchetypes;

use App\Filament\Resources\Players\PlayerResource;
use App\Filament\Resources\Players\Resources\PlayerArchetypes\Pages\CreatePlayerArchetype;
use App\Filament\Resources\Players\Resources\PlayerArchetypes\Pages\EditPlayerArchetype;
use App\Filament\Resources\Players\Resources\PlayerArchetypes\Pages\ViewPlayerArchetype;
use App\Filament\Resources\Players\Resources\PlayerArchetypes\Schemas\PlayerArchetypeForm;
use App\Filament\Resources\Players\Resources\PlayerArchetypes\Schemas\PlayerArchetypeInfolist;
use App\Filament\Resources\Players\Resources\PlayerArchetypes\Tables\PlayerArchetypesTable;
use App\Models\PlayerArchetype;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlayerArchetypeResource extends Resource
{
    protected static ?string $model = PlayerArchetype::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = PlayerResource::class;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PlayerArchetypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlayerArchetypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlayerArchetypesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'create' => CreatePlayerArchetype::route('/create'),
            'view' => ViewPlayerArchetype::route('/{record}'),
            'edit' => EditPlayerArchetype::route('/{record}/edit'),
        ];
    }
}
