<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestiguamiento extends Model
{
   protected $table = 'atestiguamiento';	
	protected $fillable = ['institucion','actividad','motivo','fecha','periodo_1','periodo_2','cod_doc_tipo','id_doc'];
}
