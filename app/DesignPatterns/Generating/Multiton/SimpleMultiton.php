<?php
namespace App\DesignPatterns\Generating\Multiton;

use App\DesignPatterns\Generating\Multiton\Interfaces\MultitonInterface;

class SimpleMultiton implements MultitonInterface
{
    use MultitonTrait;

    private $test;

    public function setTest($value)
    {
        $this->test = $value;

        return $this;
    }
}
