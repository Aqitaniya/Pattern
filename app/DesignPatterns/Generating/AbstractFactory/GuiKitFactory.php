<?php
namespace App\DesignPatterns\Generating\AbstractFactory;

use App\DesignPatterns\Generating\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\DesignPatterns\Generating\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Generating\AbstractFactory\Factories\SemanticUIFactory;

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semanticui':
                $factory = new SemanticUIFactory();
                break;
            default:
                throw new \Exception("New type [{$type}]");

        }
        return $factory;
    }
}
