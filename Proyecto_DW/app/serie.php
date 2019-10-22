<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serie extends Model
{
     protected $table='serie';

    protected $fillable=[
    	'id',
    	'serie'
    ];
}
