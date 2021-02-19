<?php
/**
 * Created by PhpStorm.
 * User: Aqitaniya
 * Date: 2/19/2021
 * Time: 10:38
 */

namespace App\DesignPatterns\Generating\Prototype;

use Carbon\Carbon;
use App\Models\Client;

class Order
{
    public $id;

    public $deliveryDt;

    private $client;

    public function __construct($id, Carbon $deliveryDt, Client $client)
    {
        $this->id = (string)$id;

        $this->deliveryDt = $deliveryDt;

        $this->client = $client;
    }

    public function __clone()
    {
        $this->id = $this->id . '_copy';
        $this->deliveryDt = $this->deliveryDt->copy();

        $this->client->addOrder($this);
    }
}
