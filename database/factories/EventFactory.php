<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Events;

$factory->define(Events::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'dateOfEvent'	=> $faker->date(),
        'fromTime' => $faker->time(),
        'toTime' => $faker->time(),
        'place' => $faker->address(),
    ];
});
