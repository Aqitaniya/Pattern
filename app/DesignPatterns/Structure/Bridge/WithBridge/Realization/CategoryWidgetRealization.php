<?php
namespace App\DesignPatterns\Structure\Bridge\WithBridge\Realization;

use App\DesignPatterns\Structure\Bridge\Entities\Category;
use App\DesignPatterns\Structure\Bridge\WithBridge\Interfaces\WidgetRealizationInterface;

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Category $category)
    {
        $this->entity = $category;
    }

    public function getId()
    {
        return $this->entity->id;
    }

    public function getTitle()
    {
        return $this->entity->title;
    }

    public function getDescription()
    {
        return $this->entity->description;
    }
}
