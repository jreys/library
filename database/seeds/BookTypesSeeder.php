<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert real book genres
        DB::table('book_types')->insert([
            'title' => 'Fantasy',
        ]);
        DB::table('book_types')->insert([
            'title' => 'Horror',
        ]);
        DB::table('book_types')->insert([
            'title' => 'Satire',
        ]);
        DB::table('book_types')->insert([
            'title' => 'Fiction',
        ]);
    }
}
