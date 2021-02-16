<?php
namespace App\DesignPatterns\Behavior\Strategy\Strategies;
use App\DesignPatterns\Behavior\Strategy\Interfaces\SalaryStrategyInterface;

class AbstractStrategy implements SalaryStrategyInterface
{
    public function calc($period, $user): int
    {
        return rand(500, 2000);
    }

    public function getName(): string {
        return class_basename(static::class);
    }
}
