<?php

namespace App\Filament\Resources\PlayerClassArchetypes;

use App\Filament\Resources\PlayerClassArchetypes\Pages\CreatePlayerClassArchetype;
use App\Filament\Resources\PlayerClassArchetypes\Pages\EditPlayerClassArchetype;
use App\Filament\Resources\PlayerClassArchetypes\Pages\ListPlayerClassArchetypes;
use App\Filament\Resources\PlayerClassArchetypes\Pages\ViewPlayerClassArchetype;
use App\Filament\Resources\PlayerClassArchetypes\Schemas\PlayerClassArchetypeForm;
use App\Filament\Resources\PlayerClassArchetypes\Schemas\PlayerClassArchetypeInfolist;
use App\Filament\Resources\PlayerClassArchetypes\Tables\PlayerClassArchetypesTable;
use App\Models\PlayerClassArchetype;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlayerClassArchetypeResource extends Resource
{
    protected static ?string $model = PlayerClassArchetype::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PlayerClassArchetypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlayerClassArchetypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlayerClassArchetypesTable::configure($table);
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
            'index' => ListPlayerClassArchetypes::route('/'),
            'create' => CreatePlayerClassArchetype::route('/create'),
            'view' => ViewPlayerClassArchetype::route('/{record}'),
            'edit' => EditPlayerClassArchetype::route('/{record}/edit'),
        ];
    }
}
