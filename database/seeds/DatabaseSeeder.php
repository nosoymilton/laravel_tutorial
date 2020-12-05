<?php

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
        $this->call(PermissionsSedder::class);
        $this->call(IdiomasSeeder::class);
        $this->call(EditorialesSeeder::class);
        $this->call(AutoresSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(LibrosSeeder::class);
        $this->call(EjemplaresSeeder::class);
        $this->call(Autores_has_librosSeeder::class);
        $this->call(Categorias_has_librosSeeder::class);
        $this->call(PrestamosSeeder::class);
        //$this->call(UserRolePermissionsSeeder::class);
    }
}
