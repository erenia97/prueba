<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('clientes_proveedores', function (Blueprint $table) {
  //  $table->integer('id_clientes_proveedores')->unsigned();

    $table->foreign('id_clientes')->references('id_clientes')->on('clientes')->change();
     $table->foreign('id_proveedores')->references('id_proveedores')->on('proveedores')->change();
     });

     Schema::table('ventas', function (Blueprint $table) {
    //$table->integer('id_ventas')->unsigned();

    $table->foreign('id_users')->references('id')->on('users')->change();
     $table->foreign('id_clientes')->references('id_clientes')->on('clientes')->change();
     });
Schema::table('ventas_detalle', function (Blueprint $table) {
    //$table->integer('id_ventas_detalle')->unsigned();

    $table->foreign('id_ventas')->references('id_ventas')->on('ventas')->change();
     $table->foreign('id_productos')->references('id_productos')->on('productos')->change();
     });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
    }
}
