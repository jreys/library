@extends('layouts.app')

@section('title', $action . ' Author')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"><div class="card-header">{{ $action }} Author</div>
                    <div class="card-body">
                        <form method="POST" action="/authors/store">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name"
                                           type="text"
                                           name="name"
                                           value="{{ $item->name }}"
                                           required="required"
                                           class="form-control">
                                </div>
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-primary col-sm-2">{{ $action }} Author</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection