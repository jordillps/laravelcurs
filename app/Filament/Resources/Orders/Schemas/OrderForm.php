<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            // ->columns(3)
            ->components([
                Section::make('Detalles del Pedido')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('order_number')
                            ->label('Número de Pedido')
                            ->unique(ignoreRecord: true)
                            ->default(fn() => 'ORD-' . strtoupper(uniqid()))
                            ->required(),
                        Select::make('user_id')
                            ->label('Cliente')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('product_id')
                            ->label('Producto')
                            ->relationship('product', 'name')
                            ->options(function () {
                                return \App\Models\Product::where('is_active', true)
                                    ->pluck('name', 'id')
                                    ->toArray();
                            })
                            ->required()
                            ->searchable()
                            ->preload(),
                        TextInput::make('total_amount')
                            ->label('Monto Total')
                            ->prefix('€')
                            ->numeric()
                            ->step(0.01)
                            ->required(),
                        Select::make('status')
                            ->label('Estado')
                            ->options([
                                'pending' => 'Pendiente',
                                'processing' => 'Procesando',
                                'shipped' => 'Enviado',
                                'delivered' => 'Entregado',
                                'cancelled' => 'Cancelado',
                            ])
                            ->default('pending')
                            ->required(),
                        DateTimePicker::make('order_date')
                            ->label('Fecha del Pedido')
                            ->default(now())
                            ->required(),
                        Textarea::make('billing_address')
                            ->label('Dirección de Facturación')
                            ->columnSpan(3)
                            ->rows(3)
                            ->placeholder('Calle, Ciudad, Código Postal, País')
                            ->required()
                            ->formatStateUsing(function ($state) {
                                if (is_array($state)) {
                                    return implode(', ', array_filter($state));
                                }
                                return $state;
                            })
                            ->dehydrateStateUsing(function ($state) {
                                if (is_string($state)) {
                                    return ['address' => $state];
                                }
                                return $state;
                            }),
                        Textarea::make('shipping_address')
                            ->label('Dirección de Envío')
                            ->columnSpan(3)
                            ->rows(3)
                            ->placeholder('Calle, Ciudad, Código Postal, País')
                            ->required()
                            ->formatStateUsing(function ($state) {
                                if (is_array($state)) {
                                    return implode(', ', array_filter($state));
                                }
                                return $state;
                            })
                            ->dehydrateStateUsing(function ($state) {
                                if (is_string($state)) {
                                    return ['address' => $state];
                                }
                                return $state;
                            }),
                    ]),
                Section::make('Notas Adicionales')
                    ->columnSpanFull()
                    ->schema([          
                    Textarea::make('notes')
                        ->label('Notas')
                        ->rows(3)
                        ->columnSpanFull(),
                ])   
            ]);
    }
}
