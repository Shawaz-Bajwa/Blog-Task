@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Latest Articles</h1>


        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <p class="card-text text-muted">{{ Str::limit(strip_tags($article->content), 150) }}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Read More</a>
                        </div>
                        <div class="card-footer text-muted small">
                            Published on {{ $article->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $articles->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
