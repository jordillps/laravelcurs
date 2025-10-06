<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Order;

class RevenueToday extends StatsOverviewWidget
{
    //ordenar en el lugar 1
    protected static ?int $sort = 1;

    //Actualitzar cada 60 segundos
    protected ?string $pollingInterval = '3600s';
    
    protected function getStats(): array
    {
        return [
            //

            //Crear un widget que muestre el total de los pedidos realizados hoy
            Stat::make('Ventas de Hoy', Order::whereDate('created_at', today())->sum('total_amount').' €')
                ->description('Total de ingresos generados hoy')
                ->descriptionIcon('heroicon-o-currency-euro')
                ->color('success'),

            Stat::make('Ventas de la semana', Order::whereDate('created_at', '>=', now()->startOfWeek())->sum('total_amount').' €')
                ->description('Total de ingresos generados esta semana')
                ->descriptionIcon('heroicon-o-currency-euro')
                ->color('success'),
            Stat::make('Ventas del mes', Order::whereDate('created_at', '>=', now()->startOfMonth())->sum('total_amount').' €')
                ->description('Total de ingresos generados este mes')
                ->descriptionIcon('heroicon-o-currency-euro')
                ->color('success'),
        ];
    }
}
