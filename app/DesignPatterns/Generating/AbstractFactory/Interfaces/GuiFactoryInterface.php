<?php
namespace App\DesignPatterns\Generating\AbstractFactory\Interfaces;

interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;
    public function buildCheckbox(): CheckBoxInterface;
}
