<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Blog</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        body {
            min-height: 75rem; /* Can be removed; just added for demo purposes */
        }

        .navbar {
            margin-bottom: 0;
        }

        .jumbotron {
            padding-top: 6rem;
            padding-bottom: 6rem;
            margin-bottom: 0;
            background-color: #fff;
        }

        .jumbotron p:last-child {
            margin-bottom: 0;
        }

        .jumbotron-heading {
            font-weight: 300;
        }

        .jumbotron .container {
            max-width: 40rem;
        }

        .album {
            min-height: 50rem; /* Can be removed; just added for demo purposes */
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: #f7f7f7;
        }

        .card {
            float: left;
            width: 33.333%;
            padding: .75rem;
            margin-bottom: 2rem;
            border: 0;
        }

        .card > img {
            margin-bottom: .75rem;
        }

        .card-text {
            font-size: 85%;
        }

        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }
    </style>
</head>
<body>

@include('layouts.nav')

<div class="container">

    @yield('content')

</div>

@include('layouts.footer')

</body>
</html>