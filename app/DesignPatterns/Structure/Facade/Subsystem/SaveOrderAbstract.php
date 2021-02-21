<?php
namespace App\DesignPatterns\Structure\Facade\Subsystem;

use App\Models\Order;

abstract class SaveOrderAbstract
{
    protected $order;

    protected $data;

    public function __construct(Order $order, array $data)
    {
        $this->order = $order;
        $this->data = $data;
    }

    public function run()
    {
        dump(static::class);
    }
}
