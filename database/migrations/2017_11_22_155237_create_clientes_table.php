<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_clientes');
            $table->string('nombre');
            $table->text('direccion');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
             $table->string('nit')->unique();
              $table->string('telefono');
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('clientes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}
