<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert real authors
        DB::table('authors')->insert([
            'name' => 'J. K. Rowling',
        ]);
        DB::table('authors')->insert([
            'name' => 'Dan Brown',
        ]);
        DB::table('authors')->insert([
            'name' => 'José Saramago',
        ]);
    }
}
