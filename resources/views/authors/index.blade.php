@extends('layout')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Authors</h1>
            <p class="lead text-muted">You can add new author or read posts from authors who already exists.</p>
            <p>
                <a href="/authors/create" class="btn btn-primary">Add new author</a>
        </div>
    </section>

    <div class="album text-muted">
        <div class="container">

            <div class="row">
                @foreach(App\Author::all() as $author)
                    <div class="card">
                        <a href="/authors/{{ $author->id }}">
                            <p class="card-text">{{ $author->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>


@endsection


@section('footer')

@endsection