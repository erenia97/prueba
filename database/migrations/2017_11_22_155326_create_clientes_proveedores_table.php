<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clientes_proveedores', function (Blueprint $table) {
        $table->increments('id_clientes_proveedores');
            $table->integer('id_clientes')->unsigned();
            $table->integer('id_proveedores')->unsigned();
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
       Schema::dropIfExists('clientes_proveedores'); 
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
         
    }
}
