@extends("layouts.main")

@section("title", "Create Post")

@section("content")
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
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
    <div class="form-group">
        <label for="published_at">Published At:</label>
        <input type="date" class="form-control" id="published_at" name="published_at">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
