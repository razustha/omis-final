<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        // \App\Models\Company::factory(5)->create();
        // $this->call(FeatureSeeder::class);
        // $this->call(PermissionSeeder::class);
        // $this->call(UserPermissionSeeder::class);
        // $this->call(CompanySeeder::class);
        // $this->call(BranchSeeder::class);
        // $this->call(DepartmentSeeder::class);
        // $this->call(DesignationSeeder::class);
        // $this->call(ShiftSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(LeaveTypeSeeder::class);
    }
}
