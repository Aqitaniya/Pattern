<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Classes\SemanticUI;

use App\DesignPatterns\Generating\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUI implements ButtonInterface
{
    public function draw()
    {
        dump('Draw Bootstrap Button');
    }
}
