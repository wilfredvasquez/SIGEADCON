<?php

use App\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			Cliente::create([
			'nombre' => 'Luis',
			'apellido' => 'David',
			'cedula' => 17890654,
			'nro_colegiado_cont' => 98765,
			'email' => 'luisdavid@gmail.com',
			'telefono' => '0412-3233323',
		]);

			Cliente::create([
			'nombre' => 'Dayana',
			'apellido' => 'Bolivar',
			'cedula' => 17890654,
			'nro_colegiado_cont' => 98765,
			'email' => 'luisdavid@gmail.com',
			'telefono' => '0412-3233323',
		]);

			Cliente::create([
			'nombre' => 'Carlos',
			'apellido' => 'Bermudez',
			'cedula' => 17890654,
			'nro_colegiado_cont' => 12345,
			'email' => 'luisdavid@gmail.com',
			'telefono' => '0412-3233323',
		]);
         
    }
}
