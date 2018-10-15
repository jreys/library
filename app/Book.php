<?php

namespace Library;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors() {
        return Author::all();
    }

    public function types() {
        return BookType::all();
    }

    public function getAuthor($id = '') {
        $record = Author::find($id);

        if ($record === null) {
            return '';
        }

        return Author::find($id)->name;
    }

    public function type($id) {
        $record = BookType::find($id);

        if ($record === null) {
            return '';
        }

        return BookType::find($id)->title;
    }
}
