<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Factories;

use App\DesignPatterns\Generating\AbstractFactory\Classes\Bootstrap\ButtonBootstrap;
use App\DesignPatterns\Generating\AbstractFactory\Classes\Bootstrap\CheckboxBootstrap;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\ButtonInterface;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\CheckBoxInterface;

class BootstrapFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }
    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}
