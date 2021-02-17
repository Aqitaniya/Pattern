<?php
namespace App\DesignPatterns\Generating\Multiton;


class SimpleMultitonNext extends SimpleMultiton
{
    protected static $instance = [];

    public $test2;
}
