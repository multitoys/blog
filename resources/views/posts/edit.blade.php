@extends('layout')

@section('content')

    <h1>Update post</h1>

    <form method="post" action="/posts/{{ $post->id }}/update">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="15">{{ $post->description }}</textarea>
        </div>

        <input type="hidden" name="id" value="{{ $post->id }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection