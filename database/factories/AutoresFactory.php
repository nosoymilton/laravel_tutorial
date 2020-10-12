<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Autores;
use Faker\Generator as Faker;

$factory->define(Autores::class, function (Faker $faker) {

    return [
        'nombres' => $faker->word,
        'apellidopaterno' => $faker->word,
        'apellidomaterno' => $faker->word
    ];
});
