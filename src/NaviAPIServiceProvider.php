<?php

namespace LuizFabianoNogueira\NaviAPI;

use Illuminate\Support\ServiceProvider;

class NaviAPIServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/naviapi.php');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->publishes([
            __DIR__.'/Config/naviapi.php' => config_path('naviapi.php'),
        ], 'navi-api-config');
    }
}
