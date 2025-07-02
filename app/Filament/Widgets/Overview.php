<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Order;

class Overview extends Widget
{
    protected static string $view = 'filament.widgets.overview';
    protected int|string|array $columnSpan = 1;

    public function getViewData(): array
    {
        return [
            'activeOrders' => Order::where('status', 'in_progress')->count(),
            'completedOrders' => Order::where('status', 'completed')->count(),
            'pendingOrders' => Order::where('status', 'pending')->count(),
        ];
    }
}
