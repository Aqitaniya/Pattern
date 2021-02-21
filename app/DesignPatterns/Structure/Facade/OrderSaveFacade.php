<?php
namespace App\DesignPatterns\Structure\Facade;

use App\DesignPatterns\Structure\Facade\Subsystem\OrderSaveDates;
use App\DesignPatterns\Structure\Facade\Subsystem\OrderSaveProducts;
use App\DesignPatterns\Structure\Facade\Subsystem\OrderSaveUsers;

use App\Models\Order;

class OrderSaveFacade
{
    private function save(Order $order , array $data)
    {
        $order = new Order();

        (new OrderSaveProducts($order, $data))->run();
        (new OrderSaveDates($order, $data))->run();
        (new OrderSaveUser($order, $data))->run();

        $order->save();

        return true;
    }
}
