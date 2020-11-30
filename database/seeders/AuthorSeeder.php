<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $i = 100;
        while($i--) {
            DB::table('authors')->insert([
                'first_name' => $faker->firstName, 
                'last_name' => $faker->lastName,
                'created_at' => Carbon::now()->subDays(rand(1, 100))
            ]);
       
    }
}
}