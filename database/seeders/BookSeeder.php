<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'date_publication' => Carbon::now()->subYears(rand(1, 18))
            
            
        ]);
    }
}
