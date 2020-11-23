<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\reservas;
use Faker\Generator as Faker;

$factory->define(reservas::class, function (Faker $faker) {

    return [
        'id_idusuario' => $faker->randomDigitNotNull,
        'fechareserva' => $faker->date('Y-m-d H:i:s'),
        'ejemplares_idejemplares' => $faker->numberBetween($min=1, $max=50),
        'users_idusers' => $faker->numberBetween($min=3, $max=3),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
