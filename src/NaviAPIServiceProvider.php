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
            __DIR__.'/Config/zap-sign.php' => config_path(),
        ], 'navi-api-config');
    }
}
