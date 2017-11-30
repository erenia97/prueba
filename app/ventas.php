<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    //
     protected $primaryKey = 'id_ventas';
    protected $table 	= 'ventas';
    protected $fillable = ['id_users','id_clientes','total','status'];

    public function usuario()
    {
        return $this->hasOne('App\User', 'id', 'id_users');
        
    }
    public function cliente()
    {
    	return $this->hasOne('App\clientes', 'id_clientes', 'id_clientes');
    }

    

      public function detalle()
    {
        return $this->hasMany('App\ventas_detalle', 'id_ventas');
    }
}

 