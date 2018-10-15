@extends('layouts.app')

@section('title', 'Add Book Type')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"><div class="card-header">Add Book Genre</div>
                    <div class="card-body">
                        <form method="POST" action="/booktypes/store">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label text-md-right">Genre</label>
                                <div class="col-md-6">
                                    <input id="title"
                                           type="text"
                                           name="title"
                                           value=""
                                           required="required"
                                           class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Genre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection