@extends('layouts.app')

@section('title', 'Books List')

@section('content')
    <div class="container">
        <h1>Books</h1>
        <hr>
    @foreach($list as $books)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex">
                            <p class="mr-auto p-2">ID: {{ $books->id }}</p>

                            <a href="{{ url('/books/update/' . $books->id) }}" class="btn btn-primary m-2">Edit</a>

                            @include('layouts.delete',
                                ['id' => $books->id, 'url' => url('/books/delete/' . $books->id)]
                            )
                        </div>
                        <div class="card-body">
                            <h1>{{ $books->title }}</h1>
                            <p>{{ $books->description }}</p>
                            <p>Genre: {{ $books->type($books->book_type) }}</p>
                            <p>Author: {{ $books->getAuthor($books->author) }}</p>
                            <p>Pages: {{ $books->pages }}</p>
                            <p>Available stock: {{ $books->quantity }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    @endforeach
    </div>
@endsection