<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
            'name' => Str::random(10),
            'address' => Str::random(10),
            'phone_number' => Str::random(10),
            'username' => Str::random(10),
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);
       
    }
}
