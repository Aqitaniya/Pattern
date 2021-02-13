<?php
namespace App\DesignPatterns\Fundamental\EventChannel\Interfaces;


Interface SubscriberInterface
{
    public function notify($data);
}
