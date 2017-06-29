<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Transaccion extends Eloquent
{
    protected $table = 'transacciones';
    protected $fillable = [
    	'tipo_transaccion',
    	'id_articulo',
    	'fecha',
    	'cantidad',
    	'monto'
    ];

    public function articulo()
    {
        return $this->hasOne('App\Articulo');
    }
}
