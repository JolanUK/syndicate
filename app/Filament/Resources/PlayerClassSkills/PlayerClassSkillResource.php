<?php

namespace App\Filament\Resources\PlayerClassSkills;

use App\Filament\Resources\PlayerClassSkills\Pages\CreatePlayerClassSkill;
use App\Filament\Resources\PlayerClassSkills\Pages\EditPlayerClassSkill;
use App\Filament\Resources\PlayerClassSkills\Pages\ListPlayerClassSkills;
use App\Filament\Resources\PlayerClassSkills\Pages\ViewPlayerClassSkill;
use App\Filament\Resources\PlayerClassSkills\Schemas\PlayerClassSkillForm;
use App\Filament\Resources\PlayerClassSkills\Schemas\PlayerClassSkillInfolist;
use App\Filament\Resources\PlayerClassSkills\Tables\PlayerClassSkillsTable;
use App\Models\PlayerClassSkill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlayerClassSkillResource extends Resource
{
    protected static ?string $model = PlayerClassSkill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PlayerClassSkillForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlayerClassSkillInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlayerClassSkillsTable::configure($table);
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
            'index' => ListPlayerClassSkills::route('/'),
            'create' => CreatePlayerClassSkill::route('/create'),
            'view' => ViewPlayerClassSkill::route('/{record}'),
            'edit' => EditPlayerClassSkill::route('/{record}/edit'),
        ];
    }
}
