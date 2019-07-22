<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {

	$fids = DB::table('filters')->select('id')->get();
    $fid = $faker->randomElement($fids)->id;
    return [
        'title' => $faker->text(25),
        'fileImg'		=> $faker->text(10).'jpg',
        'filePdf' 		=> $faker->text(10).'pdf',
        'url' 			=> $faker->domainName(),
        'description' 	=> $faker->text(30),
        'like_count'	=> 0,
        'type'		=> $fid, //filter_id

        // 0=umum , 1=beasiswa , 2=kemahasiswaan
    ];
});
