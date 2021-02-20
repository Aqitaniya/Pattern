<?php
namespace App\DesignPatterns\Structure\Adapter\Interfaces;

interface MediaLibraryInterface
{
    public function upload($pathToFile): string ;

    public function get($fileCode): string;
}
