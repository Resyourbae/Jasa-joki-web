<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    /**
     * Allow user to view any orders (for index page).
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Allow user to view their own order.
     */
    public function view(User $user, Order $order): bool
    {
        return $user->id === $order->user_id;
    }

    /**
     * Allow user to create order.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Allow user to update their own order.
     */
    public function update(User $user, Order $order): bool
    {
        return $user->id === $order->user_id;
    }

    /**
     * Allow user to delete their own order if status pending.
     */
    public function delete(User $user, Order $order): bool
    {
        return $user->id === $order->user_id && $order->status === 'pending';
    }

    public function restore(User $user, Order $order): bool
    {
        return false;
    }

    public function forceDelete(User $user, Order $order): bool
    {
        return false;
    }
}
