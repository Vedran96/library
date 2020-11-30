<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Author_TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_title')->insert([
            'author_book' => Str::random(10),
            'author_id' => 1,
            'book_id' => 1
            
            
        ]);
    }
}
