<?php
namespace  App\DesignPatterns\Generating\FactoryMethod\Classes\Forms;

use App\DesignPatterns\Generating\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\DesignPatterns\Generating\FactoryMethod\Interfaces\FormInterface;

abstract class AbstractForm implements FormInterface
{
    public function render()
    {
        $guiKit = $this->createGuiKit();

        $result[] = $guiKit->buildButton()->drow();
        $result[] = $guiKit->buildCheckbox()->drow();

       return $result;
    }

    abstract function createGuiKit(): GuiFactoryInterface;
}
