<?php
namespace App\DesignPatterns\Structure\Adapter\Interfaces;


interface MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile): string;

    public function getMedia($fileCode): string;

}
