<?php
namespace App\DesignPatterns\Fundamental\PropertyContainer\Interfaces;

Interface PropertyContainerInterface {
    function addProperty($name, $value);

    function deleteProperty($name);

    function getProperty($name);

    function setProperty($name, $value);

}
