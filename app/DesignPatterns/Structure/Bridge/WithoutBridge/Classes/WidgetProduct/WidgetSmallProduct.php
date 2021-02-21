<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetProduct;

use App\DesignPatterns\Structure\Bridge\WithoutBridge\WidgetAbstract;

class WidgetSmallProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $smallTitle = Str::limit( $product->name, 7);
        $description = $product->description;

        return compact('id', 'smallTitle', 'description');
    }
}
