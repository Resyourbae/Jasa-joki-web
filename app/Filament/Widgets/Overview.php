<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Order;

class Overview extends Widget
{
    protected static string $view = 'filament.widgets.overview';

    public function getData(): array
    {
        return [
            'ordersCount' => Order::count(),
            'pendingOrders' => Order::where('status', 'pending')->count(),
        ];
    }
}
