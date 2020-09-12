<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserRolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User
        Permission::create(['name' => 'view_roles']);
        Permission::create(['name' => 'edit_roles']);
        Permission::create(['name' => 'delete_roles']);
        Permission::create(['name' => 'create_roles']);
        //Roles
        Permission::create(['name' => 'view_users']);
        Permission::create(['name' => 'edit_users']);
        Permission::create(['name' => 'delete_users']);
        Permission::create(['name' => 'create_users']);
    }
}
