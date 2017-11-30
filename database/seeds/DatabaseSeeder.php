<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         factory('App\User', 22)->create();
        factory('App\clientes', 22)->create();
        factory('App\proveedores', 22)->create();
        factory('App\clientes_proveedores', 22)->create();
        factory('App\productos', 22)->create();
        factory('App\ventas', 22)->create();
        factory('App\ventas_detalle', 22)->create();
}
}