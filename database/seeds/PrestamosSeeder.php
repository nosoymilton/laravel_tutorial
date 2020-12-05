<?php

use Illuminate\Database\Seeder;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestamo = factory(App\Models\prestamos::class)->create([
            'fecha_reserva' => date('2020-12-03 00:00:00'),
            'fecha_prestamo' => date('2020-12-05 00:00:00'),
            'status' => 'prestado',
            'created_at' => date('2020-12-03 00:00:00'),
            'updated_at' => date('2020-12-05 00:00:00'),
            'ejemplares_idejemplares' => 1,
            'users_id' => 3
        ]);

        $prestamo = factory(App\Models\prestamos::class)->create([
            'fecha_reserva' => date('2020-12-03 00:00:00'),
            'status' => 'reservado',
            'created_at' => date('2020-12-03 00:00:00'),
            'ejemplares_idejemplares' => 2,
            'users_id' => 3
        ]);

        $prestamo = factory(App\Models\prestamos::class)->create([
            'fecha_reserva' => date('2020-12-03 00:00:00'),
            'status' => 'reservado',
            'created_at' => date('2020-12-03 00:00:00'),
            'ejemplares_idejemplares' => 3,
            'users_id' => 3
        ]);
    }
}
