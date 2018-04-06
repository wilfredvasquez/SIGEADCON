<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
    protected $table = 'tipodoc';
	 protected $fillable = ['cod_doc','descripcion'];
}
