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
            'name' => 'Vedran',
            'address' => 'Brdo 555',
            'phone_number' => '+38596695252',
            'username' => 'vedran1',
            'password' => Hash::make('vedran1'),
            'role_id' => 1
        ]);
       
    }
}
