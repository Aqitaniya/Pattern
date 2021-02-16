<?php
namespace App\DesignPatterns\Behavior\Strategy\Interfaces;

interface SalaryStrategyInterface
{
    public function calc($period, $user): int;

    public function getName(): string;
}
