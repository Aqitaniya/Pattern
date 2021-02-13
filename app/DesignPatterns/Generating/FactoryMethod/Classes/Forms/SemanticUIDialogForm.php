<?php
namespace App\DesignPatterns\Generating\FactoryMethod\Classes\Forms;


use App\DesignPatterns\Generating\AbstractFactory\Factories\SemanticUIFactory;
use App\DesignPatterns\Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUIDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUIFactory();
    }
}
