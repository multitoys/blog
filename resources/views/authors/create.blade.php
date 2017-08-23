@extends('layout')

@section('content')

    <h1>create author</h1>

    <form method="get" action="/authors">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @include('layouts.errors')

@endsection