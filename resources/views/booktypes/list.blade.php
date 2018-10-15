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
                            <p>ID: {{ $booktypes->id }}</p>

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