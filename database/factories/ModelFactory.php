<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'sexo' =>rand(0,1),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\clientes::class, function (Faker\Generator $faker) {
    static $password;

    return [
    
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' =>rand(0,1),
        'nit' => $faker->unique()->ean8,
         'telefono' => $faker->phoneNumber,
    ];
});

$factory->define(App\proveedores::class, function (Faker\Generator $faker) {
    static $password;

    return [
    
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'nit' => $faker->unique()->ean8,
         'telefono' => $faker->phoneNumber,
    ];
});

$factory->define(App\productos::class, function (Faker\Generator $faker) {
    static $password;

    return [
    
        'nombre' => $faker->name,
        'codigo' => $faker->isbn10 ,
        'sku' => $faker->unique()->ean13,
        'precio' => rand(10.25,502),
        
    ];
});

$factory->define(App\ventas::class, function (Faker\Generator $faker) {
    static $password;

    return [
         'id_users' => rand(1,21),
        'id_clientes' => rand(1,21),
        'total' => rand(10.25,502),
        'status'=> rand(0,1),
        
        
        
    ];
});

$factory->define(App\ventas_detalle::class, function (Faker\Generator $faker) {
    static $password;

    return [
         'id_ventas' => rand(1,21),
        'id_productos' => rand(1,21),
        'cantidad' => rand(10.25,502),
        'subtotal' => rand(10.25,502),
        
        
    ];
});

$factory->define(App\clientes_proveedores::class, function (Faker\Generator $faker) {
    static $password;

    return [
    
        'id_clientes' => rand(1,21),
        'id_proveedores' => rand(1,21),
        
        
    ];
});