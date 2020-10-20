<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ejemplares;
use Faker\Generator as Faker;

$factory->define(Ejemplares::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'libros_idlibros' => $faker->numberBetween($min=1, $max=10)
    ];
});
