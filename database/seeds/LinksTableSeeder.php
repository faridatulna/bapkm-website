<?php

use Illuminate\Database\Seeder;
use App\Links;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Links::class, 20)->create();
    }
}
