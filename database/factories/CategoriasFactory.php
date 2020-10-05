<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categorias;
use Faker\Generator as Faker;

$factory->define(Categorias::class, function (Faker $faker) {

    return [
        'categoria' => $faker->word,
        'descripcion' => $faker->word
    ];
});
