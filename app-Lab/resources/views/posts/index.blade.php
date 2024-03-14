<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postsss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>enabled</th>
            <th>publish</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    {{ $post->title }}
                </a></td>
                <td>{{ $post->enabled }}</td>
                <td>{{ $post->published_at }}</td>
                <td>
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}">
                    <button class="btn btn-primary">Edit</button>
                </a>
                </td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
