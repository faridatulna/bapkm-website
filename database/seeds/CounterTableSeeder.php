<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CounterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\counter::insert([
            [
              'id'              => 1,
              'today_visitors'  => 0,
              // 'total_visitors'  => 0,
              'visit_date'           => \Carbon\Carbon::now(),
              'visit_time'           => \Carbon\Carbon::now(),
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
