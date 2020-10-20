<?php

use Illuminate\Database\Seeder;
use App\Models\Editoriales;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Editoriales::class, 10)->create();
    }
}
