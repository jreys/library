@extends('layouts.app')

@section('title', $action . 'Add Book')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{  $action }} a Book</div>
                    <div class="card-body">
                        <form method="POST" action="/books/store">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Title</label>
                                <div class="col-md-6">
                                    <input id="title"
                                           type="text"
                                           name="title"
                                           value="{{ $item->title }}"
                                           required="required"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea id="description"
                                           name="description"
                                           class="form-control">
                                        {{ $item->description }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="author" class="col-sm-4 col-form-label text-md-right">Author</label>
                                <div class="col-md-6">
                                    <select id="author" name="author" class="custom-select">
                                        <option value="">--- Select Author ---</option>
                                        @foreach($item->authors() as $author)
                                            <?php $selected = $author->id === $item->author ? 'selected' : ''; ?>
                                            <option value="{{ $author->id }}" {{ $selected }}>
                                                {{ $author->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="book_type" class="col-sm-4 col-form-label text-md-right">Genre</label>
                                <div class="col-md-6">
                                    <select id="book_type" name="book_type" class="custom-select">
                                        <option value="">--- Select Genre ---</option>
                                        @foreach($item->types() as $book_type)
                                            <?php $selected = $book_type->id === $item->book_type ? 'selected' : ''; ?>
                                            <option value="{{ $book_type->id }}" {{ $selected }}>
                                                {{ $book_type->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pages" class="col-sm-4 col-form-label text-md-right">Pages</label>
                                <div class="col-md-6">
                                    <input id="pages"
                                           type="number"
                                           name="pages"
                                           value="{{ $item->pages }}"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantity" class="col-sm-4 col-form-label text-md-right">Current stock</label>
                                <div class="col-md-6">
                                    <input id="quantity"
                                           type="number"
                                           name="quantity"
                                           value="{{ $item->quantity }}"
                                           class="form-control">
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $item->id }}">

                            <button type="submit" class="btn btn-primary">{{  $action }} Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
