<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetProduct;

use App\DesignPatterns\Structure\Bridge\WithoutBridge\WidgetAbstract;

class WidgetMiddleProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $middleTitle = $product->id . '->' . $product->name;
        $description = $product->description;

        return compact('id', 'middleTitle', 'description');
    }
}
