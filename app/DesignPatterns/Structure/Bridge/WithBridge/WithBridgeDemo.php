<?php
namespace App\DesignPatterns\Structure\Bridge\WithBridge;

use App\DesignPatterns\Structure\Bridge\Entities\Product;
use App\DesignPatterns\Structure\Bridge\Entities\Category;

use App\DesignPatterns\Structure\Bridge\WithBridge\Abstraction\WidgetBigAbstraction;
use App\DesignPatterns\Structure\Bridge\WithBridge\Abstraction\WidgetMiddleAbstraction;
use App\DesignPatterns\Structure\Bridge\WithBridge\Abstraction\WidgetSmallAbstraction;

use App\DesignPatterns\Structure\Bridge\WithBridge\Realization\CategoryWidgetRealization;
use App\DesignPatterns\Structure\Bridge\WithBridge\Realization\ProductWidgetRealization;

class WithBridgeDemo
{
    public function run()
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view){
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}
