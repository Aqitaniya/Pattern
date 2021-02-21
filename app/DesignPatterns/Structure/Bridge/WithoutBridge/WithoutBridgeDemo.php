<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge;

use App\DesignPatterns\Structure\Bridge\Entities\Product;
use App\DesignPatterns\Structure\Bridge\Entities\Category;

use App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetProduct\WidgetBigProduct;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetProduct\WidgetMiddleProduct;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetProduct\WidgetSmallProduct;

use App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetCategory\WidgetBigCategory;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetCategory\WidgetMiddleCategory;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetCategory\WidgetSmallCategory;

class WithoutBridgeDemo
{
    public function run()
    {
        $product = new Product();
        (new WidgetBigProduct())->run($product);
        (new WidgetMiddleProduct())->run($product);
        (new WidgetSmallProduct())->run($product);

        $category = new Category();
        (new WidgetBigCategory())->run($category);
        (new WidgetMiddleCategory())->run($category);
        (new WidgetSmallCategory())->run($category);
    }
}
