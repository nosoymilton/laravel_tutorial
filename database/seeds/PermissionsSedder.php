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
        array_push($permissions_array, Permission::create(['name' => 'crear_libros']));
        array_push($permissions_array, Permission::create(['name' => 'editar_libros']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_libros']));
        array_push($permissions_array, Permission::create(['name' => 'ver_libros']));
        array_push($permissions_array, Permission::create(['name' => 'crear_roles']));
        array_push($permissions_array, Permission::create(['name' => 'editar_roles']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_roles']));
        array_push($permissions_array, Permission::create(['name' => 'ver_roles']));
        array_push($permissions_array, Permission::create(['name' => 'crear_usuarios']));
        array_push($permissions_array, Permission::create(['name' => 'editar_usuarios']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_usuarios']));
        array_push($permissions_array, Permission::create(['name' => 'ver_usuarios']));
        array_push($permissions_array, Permission::create(['name' => 'catalogo_libros']));
        array_push($permissions_array, Permission::create(['name' => 'tabla_libros']));
        array_push($permissions_array, Permission::create(['name' => 'crear_autores']));
        array_push($permissions_array, Permission::create(['name' => 'editar_autores']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_autores']));
        array_push($permissions_array, Permission::create(['name' => 'ver_autores']));
        array_push($permissions_array, Permission::create(['name' => 'crear_editoriales']));
        array_push($permissions_array, Permission::create(['name' => 'editar_editoriales']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_editoriales']));
        array_push($permissions_array, Permission::create(['name' => 'ver_editoriales']));
        array_push($permissions_array, Permission::create(['name' => 'crear_idiomas']));
        array_push($permissions_array, Permission::create(['name' => 'editar_idiomas']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_idiomas']));
        array_push($permissions_array, Permission::create(['name' => 'ver_idiomas']));
        array_push($permissions_array, Permission::create(['name' => 'crear_categorias']));
        array_push($permissions_array, Permission::create(['name' => 'editar_categorias']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar_categorias']));
        array_push($permissions_array, Permission::create(['name' => 'ver_categorias']));

        $AdminRole = Role::create(['name' => 'administrador']);
        $AdminRole->syncPermissions($permissions_array);

        $VolunRole = Role::create(['name' => 'voluntario'])
            ->givePermissionTo('ver_libros', 'ver_usuarios', 'tabla_libros', 'ver_autores', 'ver_editoriales', 'ver_idiomas', 'ver_categorias');

        $SocioRole = Role::create(['name' => 'socio'])
            ->givePermissionTo('catalogo_libros', 'ver_libros');
        
        //crear usuario
        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignar rol
        $userAdmin->assignRole('administrador');

        $userVolun = User::create([
            'name' => 'volun',
            'email' => 'volun@gmail.com',
            'password' => Hash::make('volun'),
        ]);
        $userVolun->assignRole('voluntario');

        $userSocio = User::create([
            'name' => 'socio1',
            'email' => 'socio1@gmail.com',
            'password' => Hash::make('socio1'),
        ]);
        $userSocio->assignRole('socio');
        
        $userSocio = User::create([
            'name' => 'socio2',
            'email' => 'socio2@gmail.com',
            'password' => Hash::make('socio2'),
        ]);
        $userSocio->assignRole('socio'); 

        $userSocio = User::create([
            'name' => 'socio3',
            'email' => 'socio3@gmail.com',
            'password' => Hash::make('socio3'),
        ]);
        $userSocio->assignRole('socio'); 

        $userSocio = User::create([
            'name' => 'socio4',
            'email' => 'socio4@gmail.com',
            'password' => Hash::make('socio4'),
        ]);
        $userSocio->assignRole('socio'); 

        $userSocio = User::create([
            'name' => 'socio5',
            'email' => 'socio5@gmail.com',
            'password' => Hash::make('socio5'),
        ]);
        $userSocio->assignRole('socio'); 
    }
}
