<?php

namespace App\Providers;

use App\DesignPatterns\Structure\Adapter\Classes\MediaLibraryAdapter;
use App\DesignPatterns\Structure\Adapter\Classes\MediaLibrarySelfWritten;
use App\DesignPatterns\Structure\Adapter\Interfaces\MediaLibraryInterface;
use Illuminate\Support\ServiceProvider;

use App\DesignPatterns\Generating\Singleton\LaravelSingleton;
use App\DesignPatterns\Generating\Singleton\AdvancedSingleton;

class AppServiceProvider extends ServiceProvider
{
    public $singleton = [
        AdvancedSingleton::class => LaravelSingleton::class,
    ];
    public $bindings = [
        MediaLibraryInterface::class => MediaLibraryAdapter::class,
//        MediaLibraryInterface::class => MediaLibrarySelfWritten::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
