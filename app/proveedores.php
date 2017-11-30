<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    //
     protected $primaryKey = 'id_proveedores';
    protected $table 	= 'proveedores';
    protected $fillable = ['nombre','direccion','nit','telefono'];
}
