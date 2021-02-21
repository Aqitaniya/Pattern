<?php
namespace App\DesignPatterns\Structure\Bridge\WithBridge\Abstraction;

use App\DesignPatterns\Structure\Bridge\WithBridge\Interfaces\WidgetRealizationInterface;

class WidgetAbstraction
{
    protected $realization;

    public function setRealization(WidgetRealizationInterface $realization)
    {
        $this->realization = $realization;
    }

    public function getRealization()
    {
        return $this->realization;
    }

    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;
        dump($method, $viewData);
    }
}
