<?php

namespace App\Filament\Resources\Prodis;

use App\Filament\Resources\Prodis\Pages\ManageProdis;
use App\Models\Prodi;
use BackedEnum;
use UnitEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProdiResource extends Resource
{
    protected static ?string $model = Prodi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_prodi';
    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tingkat_id')
                    ->relationship('tingkat', 'nama_tingkat')
                    ->required(),
                Select::make('fakultas_id')
                    ->relationship('fakultas', 'nama_fakultas')
                    // ->searchable()
                    ->required(),
                TextInput::make('kode_prodi')
                    ->required(),
                TextInput::make('nama_prodi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama_prodi')
            ->columns([
                TextColumn::make('tingkat.nama_tingkat')
                    ->searchable(),
                TextColumn::make('fakultas.nama_fakultas')
                    ->searchable(),
                TextColumn::make('kode_prodi')
                    ->searchable(),
                TextColumn::make('nama_prodi')
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
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageProdis::route('/'),
        ];
    }
}
