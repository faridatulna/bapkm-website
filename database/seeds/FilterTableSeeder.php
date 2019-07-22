<?php

use Illuminate\Database\Seeder;
use App\Filter;

class FilterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Filter::class, 6)->create();
    }
}
