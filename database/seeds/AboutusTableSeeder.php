<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Aboutus;

class AboutusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Aboutus::insert([
            [
              'id'              => 1,
              'title'            => NULL,
              'year'        => NULL,
              'image'           => NULL,
              'image1'        => NULL,
              'image2'       => NULL,
              'type'          => 1, 
              //['hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home']
              'longText'         => '<p>hello gaes!!</p>', 
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'              => 2,
              'title'            => NULL,
              'year'        => NULL,
              'image'           => '1561432394.png',
              'image1'        => '1561432394.png',
              'image2'       => '1561432394.png',
              'type'          => 3, 
              //['hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home']
              'longText'         => NULL, 
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'              => 3,
              'title'            => NULL,
              'year'        => NULL,
              'image'           => '1561432394.png',
              'image1'        => '1561432394.png',
              'image2'       => '1561432394.png',
              'type'          => 5, 
              //['hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home']
              'longText'         => '<p>hello gaes!! ini ap</p>', 
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'              => 4,
              'title'            => NULL,
              'year'        => NULL,
              'image'           => '1561432394.png',
              'image1'        => '1561432394.png',
              'image2'       => '1561432394.png',
              'type'          => 6, 
              //['hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home']
              'longText'         => '<p>hello gaes!! ini km</p> ', 
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'              => 5,
              'title'            => 'BAAK',
              'year'        => Carbon::parse('2000'),
              'image'           => NULL,
              'image1'        => NULL,
              'image2'       => NULL,
              'type'          => 2, 
              //['hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home']
              'longText'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.', 
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
