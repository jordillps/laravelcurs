<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label(__('name')),
                TextEntry::make('price')
                    ->label(__('price'))
                    ->money('EUR'),
                TextEntry::make('created_at')
                    ->label(__('created_at'))
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->label(__('updated_at'))
                    ->dateTime(),
                TextEntry::make('status')
                    ->label(__('status')),
                TextEntry::make('is_active')
                    ->label(__('active'))
                    ->formatStateUsing(fn ($state) => $state ? 'Sí' : 'No'),
                TextEntry::make('category.name')
                    ->label(__('category')),
                TextEntry::make('tags')
                    ->label(__('tags'))
                    ->formatStateUsing(fn ($state) => $state->pluck('name')->join(', '))   
            ]);
    }
}
