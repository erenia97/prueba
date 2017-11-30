<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas_detalle extends Model
{
    //
    
     protected $primaryKey = 'id_ventas_detalle';
    protected $table 	= 'ventas_detalle';
    protected $fillable = ['id_ventas','id_productos','cantidad','subtotal'];
    public function productos()
    {
        return $this->hasOne('App\productos', 'id_productos', 'id_productos');
        
    }
    
}
