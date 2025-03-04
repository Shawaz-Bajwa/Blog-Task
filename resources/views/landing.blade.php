@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Hero Section -->
        <div class="jumbotron text-center bg-dark text-white py-5 rounded shadow-lg">
            <h1 class="display-4">Welcome to Tech Trends</h1>
            <p class="lead">Stay updated with the latest blogs and articles in the tech world.</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg">Explore Blogs</a>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary btn-lg">Read Articles</a>
        </div>

        <!-- Categories Section -->
        <div class="row text-center mt-5">
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h3>Tech Blogs</h3>
                    <p class="text-muted">Read the latest insights, tutorials, and discussions from tech enthusiasts.</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">Browse Blogs</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h3>Featured Articles</h3>
                    <p class="text-muted">Explore deep dives into emerging trends and industry analysis.</p>
                    <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary">Discover Articles</a>
                </div>
            </div>
        </div>

        <!-- Latest Posts & Articles -->
        <div class="row mt-5">
            <!-- Latest Blogs -->
            <div class="col-md-6">
                <h3 class="mb-3">Latest Blogs</h3>
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                            <small class="text-muted">{{ $post->created_at->format('M d, Y') }}</small>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('posts.index') }}" class="btn btn-link mt-2">View All Blogs</a>
            </div>

            <!-- Latest Articles -->
            <div class="col-md-6">
                <h3 class="mb-3">Latest Articles</h3>
                <ul class="list-group">
                    @foreach ($articles as $article)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                            <small class="text-muted">{{ $article->created_at->format('M d, Y') }}</small>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('articles.index') }}" class="btn btn-link mt-2">View All Articles</a>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <h2>Want to Share Your Knowledge?</h2>
            <p class="text-muted">Become a contributor and start writing today!</p>
            <a href="{{ route('login') }}" class="btn btn-success btn-lg">Write a Blog</a>
            <a href="{{ route('login') }}" class="btn btn-warning btn-lg">Submit an Article</a>
        </div>
    </div>
@endsection
