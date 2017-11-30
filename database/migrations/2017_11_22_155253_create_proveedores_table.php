<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proveedores', function (Blueprint $table) {
         $table->increments('id_proveedores');
            $table->string('nombre');
            $table->text('direccion');
             $table->string('nit')->unique();
              $table->string('telefono');
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
        Schema::dropIfExists('proveedores');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
         
    }
}
