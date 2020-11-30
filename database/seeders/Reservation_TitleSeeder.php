<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Reservation_TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation_title')->insert([
            'title_book' => Str::random(10),
            'date_reservation' => Carbon::now()->subYears(rand(1, 18)),
            'book_id' => 1,
            'user_id' => 1
            
            
            
        ]);
    }
}
