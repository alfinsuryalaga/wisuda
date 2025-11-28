<?php

namespace App\Filament\Resources\Tingkats;

use App\Filament\Resources\Tingkats\Pages\ManageTingkats;
use App\Models\Tingkat;
use BackedEnum;
use UnitEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Navigation\NavigationGroup;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TingkatResource extends Resource
{
    protected static ?string $model = Tingkat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'tingkat';
    protected static ?string $navigationLabel = 'Tingkat';

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';


    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_tingkat')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nama_tingkat')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('tingkat')
            ->columns([
                TextColumn::make('kode_tingkat')
                    ->searchable(),
                TextColumn::make('nama_tingkat')
                    ->searchable(),
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
            'index' => ManageTingkats::route('/'),
        ];
    }
}
