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
            'App\Http\Repositories\EmailRepositoryInterface',
            'App\Http\Repositories\EmailRepository',
        );

        $this->app->bind(
            'App\Http\Gestion\PhotoGestionInterface',
            'App\Http\Gestion\PhotoGestion',
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
