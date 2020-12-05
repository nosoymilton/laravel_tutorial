<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\prestamos;
use Faker\Generator as Faker;

$factory->define(prestamos::class, function (Faker $faker) {

    return [
        'fecha_reserva' => null,
        'fecha_prestamo' => null,
        'fecha_devolucion' => null,
        'status' => $faker->randomElement(['prestado','reservado','devuelto','no reservado','perdido','dañado']),
        'created_at' => null,
        'updated_at' => null,
        'eliminated_at' =>null,
        'ejemplares_idejemplares' => $faker->numberBetween($min=1, $max=50),
        'users_id' => $faker->numberBetween($min=3, $max=7)
    ];
});
