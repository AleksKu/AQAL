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

$factory->define(AQAL\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(AQAL\Stocks\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(4),
        'description'=>$faker->sentence(10),
        'type' => 'product',
        'sku' => $faker->randomNumber(7),
        'weight' => $faker->randomNumber(2),
        'volume' => $faker->randomNumber(2),
        'unit_id' =>1
    ];
});


$factory->define(AQAL\Organizations\Organization::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'code'=>$faker->randomNumber(2),

    ];
});

$factory->define(AQAL\Stocks\Warehouse::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'code'=>$faker->sentence(2),

    ];
});
