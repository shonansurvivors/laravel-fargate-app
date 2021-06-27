<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @param UrlGenerator $urlGenerator
     * @return void
     */
    public function boot(UrlGenerator $urlGenerator)
    {
        if (config('app.env') !== 'local') {
            $urlGenerator->forceScheme('https');
        }
    }
}
