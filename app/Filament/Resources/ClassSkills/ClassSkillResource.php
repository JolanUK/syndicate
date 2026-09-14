<?php

namespace App\Filament\Resources\ClassSkills;

use App\Filament\Resources\ClassSkills\Pages\CreateClassSkill;
use App\Filament\Resources\ClassSkills\Pages\EditClassSkill;
use App\Filament\Resources\ClassSkills\Pages\ListClassSkills;
use App\Filament\Resources\ClassSkills\Pages\ViewClassSkill;
use App\Filament\Resources\ClassSkills\Schemas\ClassSkillForm;
use App\Filament\Resources\ClassSkills\Schemas\ClassSkillInfolist;
use App\Filament\Resources\ClassSkills\Tables\ClassSkillsTable;
use App\Models\ClassSkill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassSkillResource extends Resource
{
    protected static ?string $model = ClassSkill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ClassSkillForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClassSkillInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassSkillsTable::configure($table);
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
            'index' => ListClassSkills::route('/'),
            'create' => CreateClassSkill::route('/create'),
            'view' => ViewClassSkill::route('/{record}'),
            'edit' => EditClassSkill::route('/{record}/edit'),
        ];
    }
}
