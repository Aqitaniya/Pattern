<?php
namespace App\DesignPatterns\Structure\Adapter\Classes;

use App\DesignPatterns\Structure\Adapter\Interfaces\MediaLibraryInterface;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{
    public function upload($pathToFile): string
    {
        dump(__METHOD__);

        return mg5(__METHOD__ . $pathToFile);
    }

    public function get($fileCode): string
    {
        dump(__METHOD__);

        return '';
    }
}
