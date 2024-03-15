@extends("layouts.main")

@section("title", "Edit Post")
@section("content")
<div class="container">
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title ?? old('title') }}">
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3">{{ $post->body ?? old('body') }}</textarea>
            @error('body')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
        <label for="enabled">Enabled:</label>
        <select class="form-control" id="enabled" name="enabled">
            <option value="1">True</option>
            <option value="0">False</option>
        </select>
    </div>
        <div class="mb-3">
            <label for="published_at" class="form-label">Published At</label>
            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ $post->published_at ?? old('published_at') }}">
            @error('published_at')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
