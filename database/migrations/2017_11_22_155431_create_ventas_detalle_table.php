<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasDetalleTable extends Migration
{
    public function up()
    {
        //
         Schema::create('ventas_detalle', function (Blueprint $table) {
         $table->increments('id_ventas_detalle');
            $table->integer('id_ventas')->unsigned();
            $table->integer('id_productos')->unsigned();
             $table->integer('cantidad');
               $table->integer('subtotal');
              
            $table->timestamps();
             });
    }

    public function down()
    {
        //
         DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('ventas_detalle');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
