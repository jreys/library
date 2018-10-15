<?php

namespace Library\Http\Controllers;

use Library\Book;
use Library\Http\Controllers\Traits\HasCRUDTrait;

class BooksController extends Controller
{
    use HasCRUDTrait;

    // Change Trait's value
    public function __construct()
    {
        $this->controller = 'books';
        $this->allItems   = Book::all();
        $this->newItem    = new Book();
        $this->attributes = [
            'title',
            'description',
            'quantity',
            'pages',
            'author',
            'book_type'
        ];
    }
}
