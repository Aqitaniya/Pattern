<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetProduct;

use App\DesignPatterns\Structure\Bridge\Entities\Product;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\WidgetAbstract;

class WidgetBigProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $fullTitle = $product->id . '::::' . $product->name;
        $description = $product->description;

        return compact('id', 'fullTitle', 'description');
    }
}
