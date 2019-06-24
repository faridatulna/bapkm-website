<?php

use Illuminate\Database\Seeder;
use App\Events;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Events::class, 20)->create();
    }
}
