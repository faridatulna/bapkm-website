<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Quicklinks;

$factory->define(Quicklinks::class, function (Faker $faker) {
    return [
        'title'         => $faker->text(25),
        'url' 			=> $faker->domainName(),
    ];
});
