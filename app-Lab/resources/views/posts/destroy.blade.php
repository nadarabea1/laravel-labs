@extends("layouts.main")

@section("title", "Delete Post")

@section("content")
<table class="table">
<thead class="thead-light">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Title</th>
    <th scope="col">Enabled</th>
    <th scope="col">Published AT</th>
    </tr>
</thead>
<tbody>
    <tr>
    @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="list-group-item list-group-item-action"> {{ $post->title }}</a>
                </td>
                <td>{{ $post->enabled }}</td>
                <td>{{ $post->published_at }}</td>
                <td>
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}">
                    <button class="btn btn-primary">Edit</button>
                </a>
                </td>
                <td>
                    <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
</tbody>
</table>

@endsection
