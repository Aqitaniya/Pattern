<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Classes\Bootstrap;

use App\DesignPatterns\Generating\AbstractFactory\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw()
    {
        dump('Draw Bootstrap Button');
    }
}
