<?php

use Illuminate\Database\Seeder;
use App\Models\Autores;
use App\Models\Libros;

class Autores_has_librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 20; $i++) { 
            $autor = Autores::find($i);
            for ($j=0; $j < 10 ; $j++) { 
                $autor->libros()->attach(rand(1,10));
            }
        }
    }
}
