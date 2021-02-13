<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Factories;

use App\DesignPatterns\Generating\AbstractFactory\Classes\SemanyicUI\ButtonSemanticUI;
use App\DesignPatterns\Generating\AbstractFactory\Classes\SemanyicUI\CheckboxSemanticUI;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\ButtonInterface;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\CheckBoxInterface;

class SemanticUIFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUI();
    }
    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckboxSemanticUI();
    }
}
