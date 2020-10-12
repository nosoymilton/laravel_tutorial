<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Autores_has_libros;
use Faker\Generator as Faker;

$factory->define(Autores_has_libros::class, function (Faker $faker) {

    return [
        'libros_idlibros' => $faker->randomDigitNotNull,
        'libros_idiomas_ididiomas' => $faker->randomDigitNotNull,
        'libros_editoriales_ideditoriales' => $faker->randomDigitNotNull
    ];
});
