<?php

namespace App\Providers;

use App\Services\TestBasicService;
use App\Services\TestOne;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestBasicService::class, function () {
            return new TestBasicService(new TestOne());
        });
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
