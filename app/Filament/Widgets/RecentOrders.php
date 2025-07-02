<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Order;

class RecentOrders extends Widget
{
    protected static string $view = 'filament.widgets.recent-orders';

    public function getViewData(): array
    {
        return [
            'orders' => Order::with('user')->latest()->take(5)->get(),
        ];
    }
}
