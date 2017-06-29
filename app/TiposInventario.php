<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TiposInventario extends Eloquent
{
    protected $table = 'tipos_inventario';
    protected $fillable = [
    	'descripcion',
    	'slug',
    	'cuenta_contable',
    	'estado'
    ];
}
