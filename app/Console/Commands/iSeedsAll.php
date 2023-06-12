<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use DB;

class iSeedsAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hb:iseedall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Génerer les seed de tout les tables';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tables_in_db = DB::select('SHOW TABLES');
        $db = "Tables_in_".env('DB_DATABASE');

        $excludes = ['admin_operation_log', 'migrations'];
        $tables = [];
        foreach($tables_in_db as $table){
            if(!in_array($table->{$db}, $excludes))
                $tables[] = $table->{$db};
        }

        $str = implode(',',$tables);
        foreach($tables as $tbl)
        {
            $this->info("iSeed ".$tbl);
            Artisan::call('iseed '.$tbl." --force --clean");
            $this->info("Done ".$tbl);
        }
    }
}
