<?php

namespace App\Filament\Resources\ClassArchetypes;

use App\Filament\Resources\ClassArchetypes\Pages\CreateClassArchetype;
use App\Filament\Resources\ClassArchetypes\Pages\EditClassArchetype;
use App\Filament\Resources\ClassArchetypes\Pages\ListClassArchetypes;
use App\Filament\Resources\ClassArchetypes\Pages\ViewClassArchetype;
use App\Filament\Resources\ClassArchetypes\Schemas\ClassArchetypeForm;
use App\Filament\Resources\ClassArchetypes\Schemas\ClassArchetypeInfolist;
use App\Filament\Resources\ClassArchetypes\Tables\ClassArchetypesTable;
use App\Models\ClassArchetype;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassArchetypeResource extends Resource
{
    protected static ?string $model = ClassArchetype::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ClassArchetypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClassArchetypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassArchetypesTable::configure($table);
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
            'index' => ListClassArchetypes::route('/'),
            'create' => CreateClassArchetype::route('/create'),
            'view' => ViewClassArchetype::route('/{record}'),
            'edit' => EditClassArchetype::route('/{record}/edit'),
        ];
    }
}
