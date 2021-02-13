<?php
namespace  App\DesignPatterns\Generating\FactoryMethod\Interfaces;

interface FormInterface{
    public function render();
    public function createGuiKit();
}
