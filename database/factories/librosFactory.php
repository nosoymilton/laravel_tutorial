<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Libros;
use Faker\Generator as Faker;

$factory->define(Libros::class, function (Faker $faker) {

    return [
        'isbn' => $faker->isbn13,
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'numpaginas' => $faker->numberBetween($min=10, $max=3000),
        'apublicacion' => $faker->year(),
        'idiomas_ididiomas' => $faker->numberBetween($min=1, $max=5),
        'editoriales_ideditoriales' => $faker->numberBetween($min=1, $max=10)
    ];
});
