<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ejemplares;
use Faker\Generator as Faker;

$factory->define(Ejemplares::class, function (Faker $faker) {

    return [
        'libros_idlibros' => $faker->randomDigitNotNull,
        'libros_idiomas_ididiomas' => $faker->randomDigitNotNull,
        'libros_editoriales_ideditoriales' => $faker->randomDigitNotNull
    ];
});
