@extends('layouts.cms')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Welcome Message -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm bg-primary text-white">
                <div class="card-body">
                    <h2 class="mb-1">Welcome, {{ Auth::user()->name }}!</h2>
                    <p>Manage your content efficiently with our dashboard.</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Quick Actions</h5>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg mx-2">
                        <i class="fas fa-plus"></i> New Post
                    </a>
                    <a href="{{ route('articles.create') }}" class="btn btn-secondary btn-lg mx-2">
                        <i class="fas fa-file-alt"></i> New Article
                    </a>
                </div>
            </div>
        </div>

        <!-- Latest Posts -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">All Posts</h5>
                    <table class="table table-striped" id="postsTable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td><a href="{{ route('posts.index', $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this post?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Latest Articles -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">All Articles</h5>
                    <table class="table table-striped" id="articlesTable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td><a href="{{ route('articles.index', $article->id) }}">{{ $article->title }}</a></td>
                                <td>{{ $article->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this article?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Include DataTables -->
@section('scripts')
<script>
    $(document).ready(function() {
        $('#postsTable').DataTable();
        $('#articlesTable').DataTable();
    });
</script>
@endsection

@endsection
