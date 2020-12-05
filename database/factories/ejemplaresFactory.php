<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ejemplares;
use Faker\Generator as Faker;

$factory->define(Ejemplares::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'libros_idlibros' => $faker->randomDigitNotNull
    ];
});
