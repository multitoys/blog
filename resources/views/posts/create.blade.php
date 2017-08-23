@extends('layout')

@section('content')

    <h1>Create post</h1>

    <form method="get" action="/posts/store">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="15"></textarea>
        </div>

        <select class="form-control" name="author_id">
            @foreach(App\Author::all() as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection