<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge;

abstract class WidgetAbstract
{
    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;
        dump($method, $viewData);
    }
}
