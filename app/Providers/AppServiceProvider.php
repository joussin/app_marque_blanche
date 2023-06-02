<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SJoussin\Providers\AppMarqueBlancheServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->register(AppMarqueBlancheServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
