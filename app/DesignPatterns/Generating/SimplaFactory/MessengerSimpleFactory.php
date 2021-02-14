<?php
namespace App\DesignPatterns\Generating\SimplaFactory;

use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;
use App\DesignPatterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\DesignPatterns\Fundamental\Delegation\Messengers\SmsMessenger;

class MessengerSimpleFactory
{
    public function build($type): MessengerInterface
    {

        switch ($type) {
            case 'email' :
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender( 'user@mail.local')
                    ->setMessage('Hello');
                break;
            case 'sms' :
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('4535467575l')
                    ->setMessage('Hello');
                break;
            default:
                throw new \Exception("Not founded type [{$type}]");
        }

        return $messenger;
    }
}
