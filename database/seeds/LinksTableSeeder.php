<?php

use Illuminate\Database\Seeder;
use App\Quicklinks;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Quicklinks::class, 20)->create();
    }
}
