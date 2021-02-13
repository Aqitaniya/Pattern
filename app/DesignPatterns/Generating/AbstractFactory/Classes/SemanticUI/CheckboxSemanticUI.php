<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Classes\SemanyicUI;

use App\DesignPatterns\Generating\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckboxSemanticUI implements CheckBoxInterface
{
    public function draw()
    {
        dump('Draw Bootstrap Checkbox');
    }
}
