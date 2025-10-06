<?php

namespace App\Filament\Widgets;

use Filament\Actions\BulkActionGroup;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Order;
use Filament\Tables\Columns\TextColumn;

class LatestOrders extends TableWidget
{
    
    protected static ?string $heading = 'Ultimes comandes';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Order::query())
            ->columns([
                //
                TextColumn::make('order_number')
                    ->label(__('Número de Pedido'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label(__('Cliente'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('total_amount')
                    ->label(__('Total'))
                    ->money('EUR')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
