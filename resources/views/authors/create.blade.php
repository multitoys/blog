@extends('layout')

@section('content')

    <h1>create author</h1>

    <form method="post" action="/authors" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cover</label>
            <input type="file" name="cover" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Avatar</label>
            <input type="file" name="avatar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @include('layouts.errors')

@endsection