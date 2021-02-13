<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use App\DesignPatterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;

class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer  = [];


    public function  addProperty($name, $value)
    {
        $this->propertyContainer[$name] = $value;
    }

    public function deleteProperty($name)
    {
        unset($this->propertyContainer[$name]);
    }

    public function getProperty($name)
    {
        return $this->propertyContainer[$name] ?? null;
    }

    public function setProperty($name, $value)
    {
        if(!isset($this->propertyContainer[$name])){
            throw new \Exception("Property [{$name}] not found");
        }

        $this->propertyContainer[$name] = $value;
    }

}
