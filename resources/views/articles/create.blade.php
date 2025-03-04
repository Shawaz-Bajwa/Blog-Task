@extends('layouts.cms')

@section('content')
<h1>Create a New Article</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Publish</button>
</form>
@endsection
