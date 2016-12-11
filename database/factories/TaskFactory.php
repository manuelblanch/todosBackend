<?php

$factory->define(/**
 * @param \Faker\Generator $faker
 * @return array
 */
    App\Task::class, function (Faker\Generator $faker) {
    return [
        'name'     => $faker->sentence,
        'done'     => $faker->boolean,
        'priority' => $faker->randomDigit,
    ];
});
