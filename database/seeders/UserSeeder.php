<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'K̲A̲T̲H̲E̲E̲S̲K̲U̲M̲A̲R̲',
            'lastname' => '',
            'username' => 'katheesh',
            'email' => 'katheesh@gl.com',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Rating',
            'lastname' => 'Land',
            'username' => 'admin',
            'email' => 'admin@rating.land',
            'password' => Hash::make('admin'),
            'isDeveloper' => true,
            'isStaff' => true,
        ]);

    }
}