<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    protected $table='tienda';

    protected $fillable=[
    	'id',
    	'nombre',
    	'nit',
    	'encargado_id',
    	'ubicacion',
    	'capacidad',
    ];
}
