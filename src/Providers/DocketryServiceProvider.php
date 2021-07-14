<?php

namespace Docketry\Docketry\Providers;

use Illuminate\Support\ServiceProvider;

class DocketryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the Docketry application.
     *
     * @return void
     */
    public function boot()
    {
        // Load the routes
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        // Load the views
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'docketry');
        // Load the migrations
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }
}