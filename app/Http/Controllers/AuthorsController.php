<?php

namespace Library\Http\Controllers;

use Library\Author;
use Library\Http\Controllers\Traits\HasCRUDTrait;

class AuthorsController extends Controller
{
    use HasCRUDTrait;

    // Construct Trait's value
    public function __construct()
    {
        // Every action needs login except listing authors
        $this->middleware('auth', ['except' => 'list']);

        $this->controller = 'authors';
        $this->allItems   = Author::all();
        $this->newItem    = new Author();
        $this->attributes = [
            'name'
        ];
    }
}
