@extends('main')

@section('title', 'Books List')

@section('content')
    <a href="{{ url('/books/add') }}">Add a new Book</a>

    <div id="books">
    @foreach($list as $books)
            <div id="{{ $books->id }}">
                <p>Title: {{ $books->title }}</p>
                <p>Description: {{ $books->description }}</p>
                <p>Pages: {{ $books->pages }}</p>
                <p>Available stock: {{ $books->quantity }}</p>
            </div>
    @endforeach
    </div>
@endsection