<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        /**
         * super-admin roles ======================================================
         * access controller for all adminPanel and All user for delete and read and create and update
         * @var Role $superAdmin
         */
        $superAdmin = Role::query()->create([
            'title' => 'super-admin',
        ]);
        $superAdmin->permissions()->attach(Permission::all());
        /**
         * normal-user roles ======================================================
         * not any access controller in admin Panel
         * @var Role $superAdmin
         */
        Role::query()->create([
            'title' => 'normal-user',
        ]);
    }

}
