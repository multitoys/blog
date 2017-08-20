@extends('layout')

@section('content')

    <h1>Create post</h1>

    <form method="post" action="/post/add">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="15"></textarea>
        </div>

        <input type="hidden" name="author_id" value="{{$author}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection