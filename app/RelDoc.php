<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelDoc extends Model
{
    protected $table = 'reldoc';	
	protected $fillable = ['nro_colegiado','cedula_cli','estatus'];
}
