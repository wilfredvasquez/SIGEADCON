<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartaPresentacion extends Model
{
    protected $table = 'cartapresentacion';	
	protected $fillable = ['direccion','soporte','periodo','fecha','cod_doc_tipo','id_doc'];
}
