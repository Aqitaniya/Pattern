<?php
namespace App\DesignPatterns\Generating\ObjectPool;

use App\DesignPatterns\Generating\ObjectPool\Objects\Calculator;
use App\DesignPatterns\Generating\ObjectPool\Objects\CredicCard;
use App\DesignPatterns\Generating\ObjectPool\Objects\User;


class ObjectPoolDemo
{
    private $objectPool;

    public function __construct()
    {
        $this->objectPool = ObjectPool::getInstance();

        $user = new User();
        $creditCard = new CredicCard();
        $calculator = new Calculator();

        $this->objectPool
            ->addObject($user)
            ->addObject($creditCard)
            ->addObject($calculator);
    }

    public function run()
    {
        dump(__METHOD__, 1, $this->objectPool);
        $creditCard = $this->objectPool->getObject(CredicCard::class);
        $creditCard->cardId = '1111 2222 3333 4444';
        $creditCard->cardHolder = 'CARD HOLDER';
        $creditCard->cardPwd = '123';

        $user = $this->objectPool->getObject(User::class);
        $user->name = 'USER NAME';

        $user2 = $this->objectPool->getObject(User::class);

        dump(__METHOD__, 2, $this->objectPool, [$user, $user2, $creditCard]);

        $this->objectPool->release($creditCard);
        $this->objectPool->release($user);

        dump(__METHOD__, 3, $this->objectPool, [$user, $user2, $creditCard]);

        $creditCard2 = $this->objectPool->getObject(CredicCard::class);
        $creditCard2->cardId = '7777 2222 3333 4444';
        $creditCard2->cardHolder = 'CARD HOLDER X';
        $creditCard2->cardPwd = '555';

        dump(__METHOD__, 4, $this->objectPool, [$user, $user2, $creditCard, $creditCard2]);
    }
}
