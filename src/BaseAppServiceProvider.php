<?php

namespace Mlopez\BaseApp;

use Illuminate\Support\ServiceProvider;
use Mlopez\BaseApp\Console\Commands\LoadBaseAppCommand;


class BaseAppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LoadBaseAppCommand::class
            ]);
        }
    }

    public function boot(): void
    {
        $this->loadMigrations();
    }

    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'database/migrations');

        $this->publishes(
            [
                __DIR__.'/database/migrations' => base_path('database/migrations')
            ],
            'base-app-migrations'
        );
    }
}