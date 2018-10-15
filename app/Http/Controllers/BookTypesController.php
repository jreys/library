<?php

namespace Library\Http\Controllers;

use Library\BookType;
use Library\Http\Controllers\Traits\HasCRUDTrait;

class BookTypesController extends Controller
{
    use HasCRUDTrait;

    // Change Trait's value
    public function __construct()
    {
        // Every action needs login except listing book types
        $this->middleware('auth', ['except' => 'list']);

        $this->controller = 'booktypes';
        $this->allItems   = BookType::all();
        $this->newItem    = new BookType();
        $this->attributes = [
            'title'
        ];
    }
}
