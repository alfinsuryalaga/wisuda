<?php

namespace App\Filament\Resources\Tarifs\Tables;

use App\Models\Tingkat;
use Dom\Text;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class TarifsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tingkat.nama_tingkat')
                    ->searchable(),
                TextColumn::make('tarif')
                    ->searchable(),
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
            ->headerActions([
                CreateAction::make()
                // ->after(function ($record) {
                //     $record->update([
                //         'nama_tingkat' => match ($record->tingkat) {
                //             'A' => 'Doktor',
                //             'B' => 'Magister',
                //             'C' => 'Sarjana',
                //             'J' => 'Profesi',
                //         },
                //     ]);
                // })
                ,
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make()
                    // ->after(function ($record) {
                    //     $record->update([
                    //         'nama_tingkat' => match ($record->tingkat) {
                    //             'A' => 'Doktor',
                    //             'B' => 'Magister',
                    //             'C' => 'Sarjana',
                    //             'J' => 'Profesi',
                    //         },
                    //     ]);
                    // })
                    ,
                    DeleteAction::make(),
                ]),
                // ViewAction::make(),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
