<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
        @csrf
        @method('PUT')

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br><br>

        <label for="body">Body:</label><br>
        <textarea id="content" name="content">{{ $post->body }}</textarea><br><br>

        <label for="body">Enabled:</label><br>
        <textarea id="content" name="content">{{ $post->enabled }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
