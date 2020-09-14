<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\libros;
use Faker\Generator as Faker;

$factory->define(libros::class, function (Faker $faker) {

    return [
        'isbn' => $faker->word,
        'titulo' => $faker->word,
        'numpaginas' => $faker->word,
        'fechapublicacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
