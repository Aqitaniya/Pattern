<?php
/**
 * Created by PhpStorm.
 * User: Aqitaniya
 * Date: 2/20/2021
 * Time: 16:50
 */

namespace App\DesignPatterns\Structure\Adapter\Classes;


use App\DesignPatterns\Structure\Adapter\Interfaces\MediaLibraryInterface;

class MediaLibraryAdapter implements MediaLibraryInterface
{
    private $adapterObj;

    public function __construct()
    {
        $this->adapterObj = new MediaLibraryThirdParty();
    }

    public function upload($pathToFile): string
    {
        return $this->adapterObj->addMedia($pathToFile);
    }

    public function get($fileCode): string
    {
        return $this->adapterObj->getMedia($fileCode);
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this->adapterObj, $name)){
            //return $this->adapterObj->$name($arguments)
            return call_user_func_array([$this->adapterObj, $name], $arguments);
        } else {
            throw new \Exception("Method {$name} not found");
        }
    }
}
