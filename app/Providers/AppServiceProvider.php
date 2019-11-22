<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Magazine\MagazineRepositoryInterface',
            'App\Repositories\Magazine\MagazineRepository'
        );

        $this->app->bind(
            'App\Repositories\Publisher\PublisherRepositoryInterface',
            'App\Repositories\Publisher\PublisherRepository'
        );

        $this->app->bind(
            'App\Repositories\User\UserRepositoryInterface',
            'App\Repositories\User\UserRepository'
        );
    }
}
