<?php
namespace App\DesignPatterns\Generating\Singleton;

use App\DesignPatterns\Generating\Singleton\Interfaces\AnotherConnection;

class SimpleSingleton implements AnotherConnection
{
    private static $instance;

    private $test;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    public function setTest($val)
    {
        $this->test = $val;
    }
}
