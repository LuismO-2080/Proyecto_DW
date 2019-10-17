<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table='empleado';

    protected $fillable=[
    'cui',
    'nombres',
    'apellidos',
    'email',
    'direccion',
    'telefono_casa',
    'telefono_movil'
    ];
}
