<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
    'title' => $faker->title,
    'icon' => str_random (4) ,// secret
    'remember_token' => str_random(5),
    ];
});
