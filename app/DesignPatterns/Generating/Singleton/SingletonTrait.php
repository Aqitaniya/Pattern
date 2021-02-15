<?php
namespace App\DesignPatterns\Generating\Singleton;


trait SingletonTrait
{
    private static $instance = null;

    private function __construct()
    {

    }
    //Forbidden clone
    private function __clone()
    {

    }
    //Forbidden serialization
    //to reestablish any database connections that may have been lost during serialization and perform other reinitialization tasks.
    private function __wakeup()
    {

    }

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}
