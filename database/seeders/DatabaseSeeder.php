<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            BookSeeder::class,
            LendSeeder::class,
            AuthorSeeder::class,
            Reservation_titleSeeder::class,
            ReviewSeeder::class,
            Author_TitleSeeder::class
            
            
            
        ]);
    }
}
