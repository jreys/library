<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Controllers\Traits\HasCRUDTrait;

class AuthorsController extends Controller
{
    use HasCRUDTrait;

    // Construct Trait's value
    public function __construct()
    {
        $this->controller = 'booktypes';
        $this->allItems   = Author::all();
        $this->newItem    = new Author();
        $this->attributes = [
            'name'
        ];
    }
}
