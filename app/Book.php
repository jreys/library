<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors() {
        return Author::all();
    }

    public function types() {
        return BookType::all();
    }
}
