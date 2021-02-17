<?php
namespace App\DesignPatterns\Generating\Multiton\Interfaces;

interface MultitonInterface
{
    public static function getInstance(string $interfaceName): self;
}
