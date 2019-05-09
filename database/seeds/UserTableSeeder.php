<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,5) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'role_id' => $faker->numberBetween(0,1),
                'email' => $faker->email,
                'password' => Hash::make('123'),
            ]);
        }
    }
}
