<?php
namespace App\DesignPatterns\Fundamental\EventChannel;

use App\DesignPatterns\Fundamental\EventChannel\Classes\EventChannel;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Publisher;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Sublisher;

class EventChannelJob
{
    public function run()
    {
          $newsChannel = new EventChannel();

          $highgardenGroup = new Publisher('highgarden-news', $newsChannel);
          $winterfellNews = new Publisher('winterfell-news', $newsChannel);
          $winterfellDaily = new Publisher('winterfell-news', $newsChannel);

          $sansa = new Sublisher('Sansa Stark');
          $arya = new Sublisher('Arya Stark');
          $cersei = new Sublisher('Cersei Lannister');
          $snow = new Sublisher('Jon Snow');

          $newsChannel->subscribe('highgarden-news', $cersei);
          $newsChannel->subscribe('winterfell-news', $sansa);

          $newsChannel->subscribe('highgarden-news', $arya);
          $newsChannel->subscribe('winterfell-news', $arya);

          $newsChannel->subscribe('winterfell-news', $snow);


          $highgardenGroup->publish('New highgarden post');
          $winterfellNews->publish('New winterfell post');
          $winterfellDaily->publish('New alternative winterfell post');

    }
}
