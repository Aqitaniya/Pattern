<?php
namespace App\DesignPatterns\Fundamental\EventChannel\Classes;

use App\DesignPatterns\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use App\DesignPatterns\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        dump("{$subscriber->getName()} subscribed on [{$topic}]");
    }

    public function publish($topic, $data)
    {
        if(empty($this->topics[$topic])){
            return;
        }

        foreach ($this->topics[$topic] as $subscriber){
            $subscriber->notify($data);
        }
    }
}
