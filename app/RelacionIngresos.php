<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionIngresos extends Model
{
   protected $table = 'relacioningresos';	
	protected $fillable = ['id_doc','sueldo','honorarios','ventas','alquiler','intereses','dividendos','ingresos','promedio','nro_seguridad','cod_doc_tipo'];
}
