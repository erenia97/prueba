<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes_proveedores extends Model
{
    //

     protected $table 	= 'clientes_proveedores';
      protected $primaryKey = 'id_clientes_proveedores';
    protected $fillable = ['id_clientes','id_proveedores'];

      public function cliente()
    {
        return $this->hasOne('App\clientes', 'id_clientes', 'id_clientes');
        
    }
    public function proveedor()
    {
    	return $this->hasOne('App\proveedores', 'id_proveedores', 'id_proveedores');
    }
}
