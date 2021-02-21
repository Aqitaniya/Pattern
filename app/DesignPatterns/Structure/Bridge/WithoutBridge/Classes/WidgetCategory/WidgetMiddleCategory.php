<?php
namespace App\DesignPatterns\Structure\Bridge\WithoutBridge\Classes\WidgetCategory;

use App\DesignPatterns\Structure\Bridge\Entities\Category;
use App\DesignPatterns\Structure\Bridge\WithoutBridge\WidgetAbstract;

class WidgetMiddleCategory extends WidgetAbstract
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $middleTitle = $category->id . '->' . $category->name;
        $description = $category->description;

        return compact('id', 'middleTitle', 'description');
    }
}
