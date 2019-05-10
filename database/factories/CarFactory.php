<?php
use Faker\Generator as Faker;
$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement(array('ford','honda','toyota')),
        'Model' => $faker->randomElement(array ('LX','XL','CRV')),
        'Year' => $faker->year($max = 'now'),
    ];
});