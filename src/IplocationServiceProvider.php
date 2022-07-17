<?php
/*
Author: Noor Abdi
Company: Drongo Technology
 */

namespace Drongotech\Iplocationmanager;

use Illuminate\Support\ServiceProvider;

class IplocationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();
        $this->publishMigrations();
    }
    public function register()
    {
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/departments.php' => config_path('departments.php'),
        ], 'dt-config');
    }

    protected function publishMigrations()
    {
        $this->publishes([
            __DIR__ . '/../migrations' => database_path('migrations'),
        ], 'dt-migrations');

    }
}
