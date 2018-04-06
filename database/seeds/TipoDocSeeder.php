<?php

use App\TipoDoc;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		TipoDoc::create([
			'cod_doc' => 'ATES',
			'descripcion' => 'Informe de Atestiguamiento sobre Ingresos de Personas Naturales',
		]);
		TipoDoc::create([
			'cod_doc' => 'RING',
			'descripcion' => 'Relacion de Ingresos',
		]);
		TipoDoc::create([
			'cod_doc' => 'CPRE',
			'descripcion' => 'Carta de Presentación',
		]);
    }
}
