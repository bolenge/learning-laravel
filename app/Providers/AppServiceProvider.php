<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Http\Gestion\PhotoGestionInterface',
            'App\Http\Gestion\PhotoGestion',
            'App\Http\Repositories\EmailRepository',
            'App\Http\Repositories\EmailRepositoryInterface'
        );
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
