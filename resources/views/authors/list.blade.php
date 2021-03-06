@extends('layouts.app')

@section('title', 'Authors List')

@section('content')
    <div class="container">
        <h1>Authors</h1>
        <hr>
        @foreach($list as $author)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex">
                            <p class="mr-auto p-2">ID: {{ $author->id }}</p>

                            <a href="{{ url('/authors/update/' . $author->id) }}" class="btn btn-primary m-2">Edit</a>

                            @include('layouts.delete',
                                ['id' => $author->id, 'url' => url('/authors/delete/' . $author->id)]
                            )
                        </div>
                        <div class="card-body">
                            {{ $author->name }}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
