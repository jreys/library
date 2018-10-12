<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert real books
        DB::table('books')->insert([
            'title' => 'Harry Potter',
            'description' => 'Harry Potter has no idea how famous he is. 
                That\'s because he\'s being raised by his miserable aunt and 
                uncle who are terrified Harry will learn that he\'s really a wizard, 
                just as his parents were. But everything changes when Harry is summoned 
                to attend an infamous school for wizards, and he begins to discover some 
                clues about his illustrious birthright. From the surprising way he is greeted 
                by a lovable giant, to the unique curriculum and colorful faculty at his unusual 
                school, Harry finds himself drawn deep inside a mystical world he never knew existed and 
                closer to his own noble destiny.',
            'quantity' => 10,
            'pages' => 309,
            'author' => 1,
            'book_type' => 1
        ]);
        DB::table('books')->insert([
            'title' => 'The Lost Symbol',
            'description' => 'Famed Harvard symbologist Robert Langdon answers an unexpected summons 
            to appear at the U.S. Capitol Building. His plans are interrupted when a disturbing 
            object—artfully encoded with five symbols—is discovered in the building. 
            Langdon recognizes in the find an ancient invitation into a lost world of esoteric,
            potentially dangerous wisdom. When his mentor Peter Solomon—a long-standing Mason and 
            beloved philanthropist—is kidnapped, Langdon realizes that the only way to save Solomon 
            is to accept the mystical invitation and plunge headlong into a clandestine world of Masonic 
            secrets, hidden history, and one inconceivable truth . . . all under the watchful eye of
            Dan Brown\'s most terrifying villain to date. Set within the hidden chambers, tunnels, 
            and temples of Washington, D.C., The Lost Symbol is an intelligent, lightning-paced story 
            with surprises at every turn—one of Brown\'s most riveting novels.',
            'quantity' => 50,
            'pages' => 624,
            'author' => 2,
            'book_type' => 4
        ]);
    }
}
