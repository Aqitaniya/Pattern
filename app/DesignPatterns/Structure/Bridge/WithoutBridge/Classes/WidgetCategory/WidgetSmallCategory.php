<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetCategory;

use App\DesignPatterns\Structure\Bridge\Entities\Category;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\WidgetAbstract;

class WidgetSmallCategory extends WidgetAbstract
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $smallTitle = Str::limit( $category->name, 7);
        $description = $category->description;

        return compact('id', 'smallTitle', 'description');
    }
}
