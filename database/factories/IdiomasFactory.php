<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Idiomas;
use Faker\Generator as Faker;

$factory->define(Idiomas::class, function (Faker $faker) {

    return [
        'idioma' => $faker->word
    ];
});
