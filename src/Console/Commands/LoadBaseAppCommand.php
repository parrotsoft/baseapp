<?php

namespace Mlopez\BaseApp\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LoadBaseAppCommand extends Command
{
    protected $signature = 'base-app:install';

    protected $description = 'Run the migrations and load the data';

    public function handle()
    {
        $this->call('migrate', [
            '--path' => 'vendor/mlopez/base-app/src/database/migrations',
        ]);

        Artisan::call('db:seed', ['--class' => 'Mlopez\BaseApp\database\seeds\DepartmentsSeeder']);
        Artisan::call('db:seed', ['--class' => 'Mlopez\BaseApp\database\seeds\CitiesSeeder']);

        $this->info('Installation completed successfully.');
    }
}