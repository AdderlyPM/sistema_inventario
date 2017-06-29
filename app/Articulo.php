<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Articulo extends Eloquent
{
    protected $table = 'articulos';
    protected $fillable = [
    	'descripcion',
    	'slug',
    	'existencia',
    	'id_tipo_inventario',
        'costo_unitario',
        'estado'
    ];

    public function tipoInventario()
    {
        return $this->hasOne('App\TiposInventario');
    }
}
