<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categorias_has_libros;
use Faker\Generator as Faker;

$factory->define(Categorias_has_libros::class, function (Faker $faker) {

    return [
        'libros_idlibros' => $faker->randomDigitNotNull
    ];
});
