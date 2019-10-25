<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Status::class, function (Faker $faker) {
    $dateTime = $faker->dateTime('now','Asia/Shanghai');
    return [
        'content' => $faker->text(),
        'created_at' => $dateTime,
        'updated_at' => $dateTime
    ];
});
