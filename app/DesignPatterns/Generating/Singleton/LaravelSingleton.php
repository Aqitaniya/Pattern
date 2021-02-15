<?php
namespace App\DesignPatterns\Generating\Singleton;


class LaravelSingleton
{
    private $test;

    public function setTest($val)
    {
        $this->test = $val;
    }
}
