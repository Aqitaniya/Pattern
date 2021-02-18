<?php
namespace App\DesignPatterns\Generating\LazyInitialization;

use App\User;

class LazyInitialization
{
    private $user = null;

    public function  __construct()
    {
        $this->user = User::first();
    }

    public function getUser()
    {
        if(is_null($this->user)){
            $this->user = User::first();
            dump('Unit user');
        }
        return $this->user;
    }

    public function getDetail(){}

    public function getAction(){}

    public function setSomeData(){}
}
