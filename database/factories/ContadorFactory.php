<?php

use Faker\Generator as Faker;

$factory->define(\App\Contador::class, function (Faker $faker) {
    return [
		'nombre' => $faker->firstName,
		'apellido' => $faker->lastName,
		'cedula' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
		'nro_colegiado' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
		'email' => $faker->unique()->safeEmail,
		'password' => bcrypt('12345'),
		'telefono' => $faker->phoneNumber,
    ];
});
