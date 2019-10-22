<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table='proveedor';

    protected $fillable=[
    	'nit',
    	'nombre',
    	'telefono',
    	'direccion',
    ];
}
