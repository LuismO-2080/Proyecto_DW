<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='producto';

    protected $fillable=[
    	'codigo',
    	'nombre',
    	'proveedor_id',
    	'ubicacion',
    	'costo',
    	'precio_venta'
    ];
}
