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
        \App\User::insert([
            [
              'id'              => 1,
              'name'            => 'Super Admin',
              'username'        => 'superadmin',
              'email'           => 'superadmin@admin.com',
              // 'alamat'          => NULL,
              // 'notelp'          => NULL,
              'password'        => bcrypt('superadmin123'),
              'pass_seen'       => 'superadmin123',
              'gambar'          => NULL,
              'role_id'         => 0, //superadmin | 1= admin ap | 2 = admin km
              'remember_token'  => NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
        \App\User::insert([
            [
              'id'              => 2,
              'name'            => 'Admin AP',
              'username'        => 'adminap',
              'email'           => 'adminap@admin.com',
              // 'alamat'          => NULL,
              // 'notelp'          => NULL,
              'password'        => bcrypt('adminap123'),
              'pass_seen'       => 'adminap123',
              'gambar'          => NULL,
              'role_id'         => 0, //superadmin | 1= admin ap | 2 = admin km
              'remember_token'  => NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
        \App\User::insert([
            [
              'id'              => 3,
              'name'            => 'Admin KM',
              'username'        => 'adminkm',
              'email'           => 'adminkm@admin.com',
              // 'alamat'          => NULL,
              // 'notelp'          => NULL,
              'password'        => bcrypt('adminkm123'),
              'pass_seen'       => 'adminkm123',
              'gambar'          => NULL,
              'role_id'         => 0, //superadmin | 1= admin ap | 2 = admin km
              'remember_token'  => NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
