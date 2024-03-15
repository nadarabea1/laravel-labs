<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .nav-pills .nav-link.active {
        background-color: blue;
        color: white; /* Optional: Set text color to white for better contrast */
    }

    </style>
</head>
<body>
    <nav id="navbar-example2" class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="{{ route('posts.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts/create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        @yield("content")
    </div>

</body>
</html>
