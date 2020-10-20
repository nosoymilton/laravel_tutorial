<?php

use Illuminate\Database\Seeder;
use App\Models\Categorias;
use App\Models\Libros;

class Categorias_has_librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 30; $i++) { 
            $categoria = Categorias::find($i);
            for ($j=0; $j < 10 ; $j++) { 
                $categoria->libros()->attach(rand(1,10));
            }
        }
    }
}
