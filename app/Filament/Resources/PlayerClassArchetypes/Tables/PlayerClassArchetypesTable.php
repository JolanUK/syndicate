<?php

namespace App\Filament\Resources\PlayerClassArchetypes\Tables;

use App\Models\PlayerClassSkill;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PlayerClassArchetypesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->extraImgAttributes([
                        'loading' => 'lazy',
                    ]),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('label')
                    ->searchable(),
                TextColumn::make('passives')
                    ->listWithLineBreaks()
                    ->state(function ($record) {
                        $result = [];

                        if ($record->passives) {
                            foreach ($record->passives as $passive) {
                                // TODO: it may be wise to set a colour for plus and minus modifiers
                                $class = PlayerClassSkill::where('id', $passive['class'])->value('name');
                                $modifier = $passive['modifier'];
                                $result[] = "{$class}: {$modifier}";
                            }
                        }

                        return $result;
                    })
                    ->bulleted(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
