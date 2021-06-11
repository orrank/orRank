<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'katheesh',
            'lastname' => 'kr',
            'username' => 'katheesh',
            'email' => 'katheesh@gl.com',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'OrRank',
            'lastname' => 'com',
            'username' => 'admin',
            'email' => 'admin@orrank.com',
            'password' => Hash::make('admin'),
            'isDeveloper' => true,
            'isStaff' => true,
        ]);
    }
}
