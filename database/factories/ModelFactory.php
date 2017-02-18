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

$factory->define(App\Model\Lesson1::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
    ];
});

$factory->define(App\Model\Lesson6::class, function (Faker\Generator $faker) {
    return [
        'column1' => $faker->name,
        'column2' => $faker->name,
        'column3' => $faker->name,
        'column4' => $faker->name,
    ];
});

$factory->define(App\Model\Lesson7::class, function (Faker\Generator $faker) {
    return [
        'column1' => $faker->name,
        'column2' => $faker->name,
        'column3' => $faker->name,
        'column4' => $faker->name,
        'column5' => $faker->name,
    ];
});
