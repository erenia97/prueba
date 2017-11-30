<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('ventas', function (Blueprint $table) {
         $table->increments('id_ventas');
            $table->integer('id_users')->unsigned();
            $table->integer('id_clientes')->unsigned();
             $table->decimal('total');
              $table->integer('status');
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
        //
          DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('ventas');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
