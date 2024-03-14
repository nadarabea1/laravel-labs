<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post show</title>
</head>
<body>
    @if($post)
        <p>Post ID: {{ $post->id }}</p>
        <p>Title: {{ $post->title }}</p>
        <p>Body: {{ $post->body }}</p>
        <p>Enabled: {{ $post->enabled }}</p>
        <p>Craeted At: {{ $post->created_at }}</p>
        <p>Published At: {{ $post->published_at }}</p>
    @else
        <p>Post not found.</p>
    @endif
</body>
</html>
