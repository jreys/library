@extends('main')

@section('title', 'Book Genre List')

@section('content')
    <a href="{{ url('/booktypes/add') }}">Add a new Book Genre</a>

    <div id="booktypes">
    @foreach($list as $booktypes)
            <div id="{{ $booktypes->id }}">
                <p>ID: {{ $booktypes->id }}</p>
                <p>Genre: {{ $booktypes->title }}</p>
            </div>
    @endforeach
    </div>
@endsection