<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $user = \App\Models\User::create([
            // 'User_type' => $arr[array_rand($arr,1),
            'User_type' => 'SUPER ADMIN',
            // 'first_name' => $this->faker->name(),
            'name' => 'Super Admin',
            // 'last_name' => $this->faker->name(),
            // 'mobile' => $this->faker->numerify('##########'),
            'mobile' => '9816836473',

            // 'email' => $this->faker->unique()->safeEmail(),
            'email' => 'superadmin@bibhutisolutions.com',
            'email_verified_at' => now(),
            'password' => '$2a$10$3jGELLamaNW96G4lDdOOhupYOhT9l6eFsfTayUdWydqkc6Jyht4Bu', // password
            'remember_token' => Str::random(10),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        $role = Role::create([
            'name' => 'Super Super Admin', 'slug' => 'super-super-admin',
            'createdOn' => now(),
            'createdBy' => '1',
            'updatedBy' => '1',
        ]);
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            RolePermission::create([
                'role_id' => $role->id,
                'permission_id' => $permission->id,
            ]);
        }
        $user->roles()->attach($role);

        // \App\Models\Company::factory(5)->create();
        // $this->call(FeatureSeeder::class);
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
