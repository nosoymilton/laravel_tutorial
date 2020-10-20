<?php

use Illuminate\Database\Seeder;
use App\Models\Autores;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Autores::class, 20)->create();
    }
}
