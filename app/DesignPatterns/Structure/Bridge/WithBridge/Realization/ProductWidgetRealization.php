<?php
/**
 * Created by PhpStorm.
 * User: Aqitaniya
 * Date: 2/21/2021
 * Time: 18:54
 */

namespace App\DesignPatterns\Structure\Bridge\WithBridge\Realization;

use App\DesignPatterns\Structure\Bridge\Entities\Product;
use App\DesignPatterns\Structure\Bridge\WithBridge\Interfaces\WidgetRealizationInterface;

class ProductWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
    }

    public function getId()
    {
        return $this->entity->id;
    }

    public function getTitle()
    {
        return $this->entity->name;
    }

    public function getDescription()
    {
        return $this->entity->description;
    }
}
