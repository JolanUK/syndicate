<?php

namespace App\Filament\Resources\Players\Resources\PlayerClasses;

use App\Filament\Resources\Players\PlayerResource;
use App\Filament\Resources\Players\Resources\PlayerClasses\Pages\CreatePlayerClasses;
use App\Filament\Resources\Players\Resources\PlayerClasses\Pages\EditPlayerClasses;
use App\Filament\Resources\Players\Resources\PlayerClasses\Pages\ViewPlayerClasses;
use App\Filament\Resources\Players\Resources\PlayerClasses\Schemas\PlayerClassesForm;
use App\Filament\Resources\Players\Resources\PlayerClasses\Schemas\PlayerClassesInfolist;
use App\Filament\Resources\Players\Resources\PlayerClasses\Tables\PlayerClassesTable;
use App\Models\PlayerClass;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlayerClassesResource extends Resource
{
    protected static ?string $model = PlayerClass::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = PlayerResource::class;

    protected static ?string $slug = 'classes';

    public static function form(Schema $schema): Schema
    {
        return PlayerClassesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlayerClassesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlayerClassesTable::configure($table);
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
            'create' => CreatePlayerClasses::route('/create'),
            'view' => ViewPlayerClasses::route('/{record}'),
            'edit' => EditPlayerClasses::route('/{record}/edit'),
        ];
    }
}
