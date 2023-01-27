<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DBTruncate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:truncate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncate all the tables';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        try {
            $tables = DB::select('SHOW TABLES');
            $databasdeName =   DB::connection()->getDatabaseName();
            $allTables = [];
            foreach ($tables as $table) {
                $table_field = "Tables_in_$databasdeName";
                $allTables[$table->$table_field] = $table->$table_field;
            }
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            foreach ($allTables as $table) {
                if ($table == 'tbl_country' || $table == 'tbl_state' || $table == 'tbl_district')
                    continue;
                DB::table($table)->truncate();
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $this->comment(PHP_EOL . 'All tables are truncated.' . PHP_EOL);
        } catch (\Exception $e) {
            $this->comment(PHP_EOL . 'Sorry, some technical issues while truncated data.' . PHP_EOL);
        }
    }
}
