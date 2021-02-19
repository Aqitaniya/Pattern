<?php
/**
 * Created by PhpStorm.
 * User: Aqitaniya
 * Date: 2/19/2021
 * Time: 10:33
 */

namespace App\DesignPatterns\Generating\Prototype;

use App\Models\Order;

class Client
{
    public $id;

    public $name;

    private $orders;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addOrder(Order $order)
    {
        $this->orders[$order->id] = $order;
    }
}
