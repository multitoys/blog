@extends('layout')

@section('content')

    <h1>All posts of {{ $author->name }}</h1>

    {!! $author->imageTag('avatar') !!}
    {!! $author->imageTag('cover') !!}

    <form method="post" action="/authors/update" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $author->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cover</label>
            <input type="file" name="cover" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Avatar</label>
            <input type="file" name="avatar" class="form-control">
        </div>
        <input type="hidden" name="id" value="{{ $author->id }}">
        <button type="submit" class="btn btn-primary">Update author</button>
    </form>

    @include('layouts.errors')

    <div class="album text-muted">
        <div class="container">

            <div class="row">
                <a href="/post/create/{{$author->id}}" class="btn btn-success">Add Post</a>
            </div>
            <div class="row">
                @foreach($author->posts as $post)
                    <div class="card">
                        <a href="/post/{{ $post->id }}">
                            <p class="card-text">{{ $post->title }}</p>
                        </a>
                        <p class="card-text">{{ substr($post->description, 0, 77) }}</p>
                        <a href="/post/{{ $post->id }}" class="btn btn-warning">View...</a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection