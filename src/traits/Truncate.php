<?php

namespace Mlopez\BaseApp\traits;

use Illuminate\Support\Facades\DB;

trait Truncate
{
    public function truncateTable($table)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($table)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}