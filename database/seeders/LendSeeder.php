<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class LendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lends')->insert([
            'book_id' => 1,
            'user_id' => 1,
            'date_from' => '2020-12-24',
            'date_to' => '2020-12-25'
            
            ]);
    }
}
