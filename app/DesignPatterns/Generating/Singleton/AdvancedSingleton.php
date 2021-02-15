<?php
namespace App\DesignPatterns\Generating\Singleton;


class AdvancedSingleton
{
    use SingletonTrait;

    private $test;

    public function setTest($val)
    {
        $this->test = $val;
    }
}
