<?php

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->streetName,
        "parent_id" => null,
    ];
});
