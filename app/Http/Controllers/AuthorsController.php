<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index() {
        // Fetch all authors
        $authors = Author::all();

        return view('authors.list', compact('authors'));
    }

    public function add() {
        return view('authors.add');
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
