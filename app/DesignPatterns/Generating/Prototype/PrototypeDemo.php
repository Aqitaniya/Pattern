<?php
namespace App\DesignPatterns\Generating\Prototype;

use Carbon\Carbon;
use GuzzleHttp\Client;

class PrototypeDemo
{
    public function run()
    {
        $client = new Client(2, 'Client');

        $deliveryDt = Carbon::parse('31.12.2030 15:00:00');

        $order = new Order(11, $deliveryDt, $client);

        $client->addOrder($order);

        $cloneOrder = clone $order;
        $cloneOrder->delivaryDt->addDay();

        return compact('client', 'order', 'cloneOrder');
    }
}
