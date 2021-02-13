<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Classes\Bootstrap;

use App\DesignPatterns\Generating\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckboxBootstrap implements CheckBoxInterface
{
    public function draw()
    {
        dump('Draw Bootstrap Checkbox');
    }
}
