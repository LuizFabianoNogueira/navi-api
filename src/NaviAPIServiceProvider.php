<?php

namespace LuizFabianoNogueira\NaviAPI;

use Illuminate\Support\ServiceProvider;

class NaviAPIServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/naviapi.php');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->publishesMigrations([
            __DIR__.'/Migrations' => database_path('migrations'),
        ], 'navi-api-migrations');

        $this->publishes([
            __DIR__.'/Resources/js' => public_path('assets/js'),
        ], 'navi-api-assets');
    }
}
