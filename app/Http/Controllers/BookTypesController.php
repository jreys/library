<?php

namespace App\Http\Controllers;

use App\BookType;
use App\Http\Controllers\Traits\HasCRUDTrait;

class BookTypesController extends Controller
{
    use HasCRUDTrait;

    // Change Trait's value
    public function __construct()
    {
        $this->controller = 'booktypes';
        $this->allItems   = BookType::all();
        $this->newItem    = new BookType();
        $this->attributes = [
            'title'
        ];
    }
}
