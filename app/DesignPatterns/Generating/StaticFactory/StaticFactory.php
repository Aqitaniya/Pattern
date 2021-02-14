<?php
namespace App\DesignPatterns\Generating\StaticFactory;

use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build(string $type = 'email'): MessengerInterface
    {
        $messenger = new AppMessenger();
        switch ($type) {
            case 'email' :
                $messenger->toEmail();
                $sender = 'user@mail.local';
                break;
            case 'sms' :
                $messenger->toSms();
                $sender = '4535467575l';
                break;
            default:
                throw new \Exception("Not founded type [{$type}]");
        }
        $messenger
            ->setSender($sender)
            ->setMessage('Hello');

        return $messenger;
    }
}
