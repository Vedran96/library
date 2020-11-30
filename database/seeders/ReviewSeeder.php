<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_comment' => Str::random(10),
            'user_rating' => rand(1, 5),
            'book_id' => 1,
            'user_id' => 1
            
            
            
        ]);
    }
}
