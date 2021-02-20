<?php
namespace App\DesignPatterns\Structure\Adapter\Classes;

use App\DesignPatterns\Structure\Adapter\Interfaces\MediaLibraryThirdPartyInterface;

class MediaLibraryThirdParty implements  MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile): string
    {
        dump(__METHOD__);

        return mg5(__METHOD__ . $pathToFile);
    }

    public function getMedia($fileCode): string
    {
        dump(__METHOD__);

        return '';
    }
}
