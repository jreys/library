@extends('layouts.app')

@section('title', 'Book Genre List')

@section('content')
    <div class="container">
        <h1>Book Genres</h1>
        <hr>
        @foreach($list as $booktypes)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex">
                            <p class="mr-auto p-2">ID: {{ $booktypes->id }}</p>

                            <a href="{{ url('/booktypes/update/' . $booktypes->id) }}" class="btn btn-primary m-2">Edit</a>

                            @include('layouts.delete',
                                ['id' => $booktypes->id, 'url' => url('/booktypes/delete/' . $booktypes->id)]
                            )
                        </div>
                        <div class="card-body">
                            {{ $booktypes->title }}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection