<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use App\Enums\ProductStatusEnum;
use Filament\Forms\Components\ModalTableSelect;
use Filament\Tables\Table;
use App\Filament\Tables\CategoriesTable;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique(),
                Textarea::make('description')
                    ->columnSpan('full'),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    // ->suffix('€'),
                    ->suffix('€'),
                // Select::make('status')
                //     // ->options(collect(ProductStatusEnum::cases())->pluck('name', 'value')->toArray())
                //     ->options(ProductStatusEnum::class)
                //     ->required()
                //     ->default(ProductStatusEnum::IN_STOCK->value),
                Radio::make('status')
                    ->options(ProductStatusEnum::class)
                    ->required()
                    ->default(ProductStatusEnum::IN_STOCK->value),
                // Select::make('category_id')
                //     ->label('Categoría')
                //     ->relationship('category', 'name')
                ModalTableSelect::make('categories')
                    ->label('Categorías')
                    ->relationship('category', 'name')
                    ->tableConfiguration(CategoriesTable::class)
                    // ->columns(['name'])
                    // ->searchable()
                    // ->placeholder('Selecciona las categorías'),
            ]);
    }
}
