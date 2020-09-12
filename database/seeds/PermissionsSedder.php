<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\User;

class PermissionsSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array = [];
        array_push($permissions_array, Permission::create(['name' => 'create_books']));
        array_push($permissions_array, Permission::create(['name' => 'edit_books']));
        array_push($permissions_array, Permission::create(['name' => 'delete_books']));
        $viewBooksPermission = Permission::create(['name' => 'view_books']);
        array_push($permissions_array, $viewBooksPermission);
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $superAdminRole->syncPermissions($permissions_array);
        $viewBooksRole = Role::create(['name' => 'view_books']);
        $viewBooksRole->givePermissionTo($viewBooksPermission);

        //crear usuario
        $userSuperAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignar rol
        $userSuperAdmin->assignRole('super_admin');
        $userViewBooks = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
        ]);
        $userViewBooks->assignRole('view_books');
        User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('test2'),
        ]);
    }
}
