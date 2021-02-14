<?php
namespace App\DesignPatterns\Generating\StaticFactory\Interfaces;

interface MessengerStaticFactoryInterface
{
    public static function build($type);
}
