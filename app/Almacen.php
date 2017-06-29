<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Almacen extends Eloquent
{
	protected $table = 'almacenes';
    protected $fillable =
    [
    	'descripcion',
    	'slug',
    	'estado'
    ];
}
