<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $fillable = [
    	'description',
    	'auxiliary',
    	'transactions'
    ];
}
