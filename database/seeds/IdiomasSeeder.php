<?php

use Illuminate\Database\Seeder;
use App\Models\Idiomas;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Idiomas::class, 5)->create();
    }
}
