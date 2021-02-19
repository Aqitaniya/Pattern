<?php
namespace App\DesignPatterns\Generating\Prototype;

abstract class CoreRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelCkass());
    }

    abstract protected function getModelClass();

    protected function startConditions()
    {
        return clone $this->model;
    }
}
