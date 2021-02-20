<?php
namespace App\DesignPatterns\Generating\ObjectPool;

use App\DesignPatterns\Generating\ObjectPool\Interfaces\ObjectPoolInterface;
use App\DesignPatterns\Generating\Singleton\SingletonTrait;
use Mockery\Exception;

class ObjectPool
{
    use SingletonTrait;

    private $clones = [];

    private $prototype = [];

    public function addObject(ObjectPoolInterface $obj)
    {
        $key = $this->grtObjKey($obj);
        $this->prototype[$key] = $obj;

        return $this;
    }

    private function grtObjKey($obj)
    {
        if(is_object($obj)){
            $key = get_class($obj);
        } elseif (is_string($obj)){
            $key = $obj;
        } else {
            throw new Exception('???');
        }

        return $key;
    }

    public function getObject(string $className)
    {
        $key = $this->grtObjKey($className);

        if(isset($this->clones[$key])){
            return false;
        }

        if(empty($this->prototype[$key])){
            return null;
        }

        $this->clones[$key] = clone $this->prototype[$key];

        return $this->clones[$key];
    }

    public function release(ObjectPoolInterface &$obj)
    {
        $key = $this->getObject($obj);
        unset($this->clones[$key]);
        $obj = null;
    }
}
