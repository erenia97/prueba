<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
    protected $primaryKey = 'id_clientes';
    protected $table 	= 'clientes';
    protected $fillable = ['nombre','direccion','fecha_nacimiento','sexo','nit','telefono'];
}
