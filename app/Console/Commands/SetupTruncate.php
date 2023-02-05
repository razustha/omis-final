<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SetupTruncate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:truncate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncate tables for setup permissions,users roles, roles_permissions,users_roles,employee';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        try {
            $tables = [
                'users',
                'permissions',
                'roles',
                'roles_permissions',
                'users_roles',
                'tbl_employee',
                'tbl_organization'
            ];
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            foreach ($tables as $table) {
                DB::table($table)->truncate();
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $this->comment(PHP_EOL . 'Tables truncated are users,permissions, roles, roles_permissions,users_roles,tbl_employee and tbl_organization.' . PHP_EOL);
        } catch (\Exception $e) {
            $this->comment(PHP_EOL . 'Sorry, some technical issues while truncated data.' . PHP_EOL);
        }
    }
}
