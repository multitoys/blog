@extends('layout')

@section('content')

    <h1>All posts of {{ $author->name }}</h1>

    <form method="get" action="/authors/update">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $author->name }}">
        </div>

        <input type="hidden" name="id" value="{{ $author->id }}">
        <button type="submit" class="btn btn-primary">Update author</button>
    </form>

    @include('layouts.errors')

    <div class="album text-muted">
        <div class="container">

            <div class="row">
                <a href="/posts/create" class="btn btn-success">Add Post</a>
            </div>
            <div class="row">
                @foreach($author->posts as $post)
                    <div class="card">
                        <a href="/posts/{{ $post->id }}">
                            <p class="card-text">{{ $post->title }}</p>
                        </a>
                        <p class="card-text">{{ substr($post->description, 0, 77) }}</p>
                        <a href="/posts/{{ $post->id }}" class="btn btn-warning">View...</a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection