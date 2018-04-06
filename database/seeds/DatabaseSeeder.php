<?php

use Illuminate\Database\Seeder; 
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
			$this->truncateTables([
				'contadores',
				'clientes',
				'tipodoc',
				'atestiguamiento',
				'relacioningresos',
				'cartapresentacion',
				'reldoc',
				'admin'
			]);
			$this->call(ContadorSeeder::class);
			$this->call(ClienteSeeder::class);
			$this->call(TipoDocSeeder::class);
			$this->call(AdminSeeder::class);
    }

	protected function truncateTables($tables){

		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
	
		foreach ($tables as $table){
			DB::table($table)->truncate();
		}
	
		DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
