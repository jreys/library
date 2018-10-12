@extends('main')

@section('title', 'Authors List')

@section('content')
    <a href="{{ url('/authors/add') }}">Add a new author</a>

    <div id="authors">
    @foreach($list as $author)
            <div id="{{ $author->id }}">
                <p>ID: {{ $author->id }}</p>
                <p>Name: {{ $author->name }}</p>
            </div>
    @endforeach
    </div>
@endsection