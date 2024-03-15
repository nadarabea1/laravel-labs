<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @if($post)

    <div class="card">
    <div class="card-header">
        Post ID: {{ $post->id }}
    </div>
    <div class="card-body">
        <h5 class="card-title">Title: {{ $post->title }}</h5>
        <p class="card-text">Body: {{ $post->body }}</p>
        <div class="card-footer text-muted row">
            <p class="col-6">Craeted At: {{ $post->created_at }}</p>
            <p class="col-6">Published At: {{ $post->published_at }}</p>
        </div>
    </div>

</div>
@else
        <p>Post not found.</p>
    @endif
</body>
</html>
