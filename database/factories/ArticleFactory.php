<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'fileImg'		=> $faker->text(10).'jpg',
        'filePdf' 		=> $faker->text(10).'pdf',
        'url' 			=> $faker->domainName(),
        'description' 	=> $faker->text(30),
        'type'			=> $faker->numberBetween(1,6),
        // 0=umum , 1=beasiswa , 2=kemahasiswaan
    ];
});
