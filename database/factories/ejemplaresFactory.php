<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ejemplares;
use Faker\Generator as Faker;

$factory->define(ejemplares::class, function (Faker $faker) {

    return [
        'numeroejemplar' => $faker->word,
        'libros_idlibros' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
