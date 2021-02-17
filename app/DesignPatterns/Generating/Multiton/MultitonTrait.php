<?php
namespace App\DesignPatterns\Generating\Multiton;

use App\DesignPatterns\Generating\Multiton\Interfaces\MultitonInterface;

class MultitonTrait
{
    protected static $instance = [];

    private $name;

    private function __construct()
    {
        //
    }

    private function __clone()
    {
        //
    }

    private function __wakeup()
    {
        //
    }

    public static function getInstance(string $instanceName): MultitonInterface
    {
        if(isset(static::$instance[$instanceName])) {
            return static::$instance[$instanceName];
        }

        static::$instance[$instanceName] = new static();
        static::$instance[$instanceName]->setName($instanceName);

        return static::$instance[$instanceName];
    }

    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }
}
