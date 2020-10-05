<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Libros;
use Faker\Generator as Faker;

$factory->define(Libros::class, function (Faker $faker) {

    return [
        'isbn' => $faker->word,
        'titulo' => $faker->word,
        'numpaginas' => $faker->randomDigitNotNull,
        'apublicacion' => $faker->word,
        'idiomas_ididiomas' => $faker->randomDigitNotNull,
        'editoriales_ideditoriales' => $faker->randomDigitNotNull
    ];
});
