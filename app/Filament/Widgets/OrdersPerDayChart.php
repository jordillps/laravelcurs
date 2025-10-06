<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Order;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Product;

class OrdersPerDayChart extends ChartWidget
{
    protected ?string $heading = 'Pedidos por Día';

    //span full width
    protected int|string|array $columnSpan = 'full';

    //limitar la altura del widget
    protected ?string $height = '300px';

    //Actualitzar cada 60 segundos
    protected ?string $pollingInterval = '3600s';

    protected function getData(): array
    {
        //example 1
        // return [
        //     //Obtener el número de pedidos por día durante los últimos 30 días
        //     'datasets' => [
        //         [
        //             'label' => 'Blog posts created',
        //             'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
        //         ],
        //     ],
        //     'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']



        // ];

        //example 2
        $data = Trend::model(Order::class)
            ->between(
                start: now()->subDays(60),
                end: now(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Pedidos por Día',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            //Formato de fecha dia mes año
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
