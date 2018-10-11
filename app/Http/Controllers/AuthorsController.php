<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Controllers\Traits\HasCRUDTrait;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    use HasCRUDTrait;

    // Change Trait's value
    public function __construct()
    {
        $this->controller = 'authors';
        $this->allItems   = Author::all();
    }

    public function store() {
        // Create a new author and set it's data from the request
        $author = new Author();
        $author->name = request('name');

        // Save the data persistently
        $author->save();

        // Redirect to the previous page
        return redirect('/authors');
    }
}
