@extends('layout')

@section('content')

    <h1>{{ $post->title }}</h1>
    <p><a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a> ({{ $post->updated_at }})</p>

    <div class="content">
        <div class="row">
            <a href="/post/delete/{{ $post->id }}/" class="btn btn-danger">Delete Post</a>
            <a href="/post/update/{{ $post->id }}/" class="btn btn-info">Update Post</a>
        </div>
        <div class="row">
            {{ $post->description }}
        </div>
    </div>

@endsection