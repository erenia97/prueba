<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //

    //
      protected $primaryKey = 'id_productos';
    protected $table 	= 'productos';
    protected $fillable = ['nombre','codigo','sku','precio'];


}
