<?php

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


class SmsMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        dump('Sent by'.__METHOD__);
        return parent::send();
    }
}
