<?php
namespace App\DesignPatterns\Generating\FactoryMethod\Classes\Forms;


use App\DesignPatterns\Generating\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}
