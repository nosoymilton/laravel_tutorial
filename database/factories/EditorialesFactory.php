<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Editoriales;
use Faker\Generator as Faker;

$factory->define(Editoriales::class, function (Faker $faker) {

    return [
        'editorial' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'descripcion' => $faker->text($maxNbChars = 100)    
    ];
});
