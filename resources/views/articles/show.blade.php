@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title">{{ $article->title }}</h1>
            <p class="text-muted">By <strong>{{ $article->user->name }}</strong> | Published on {{ $article->created_at->format('M d, Y') }}</p>
            <hr>
            <p class="card-text">{!! nl2br(e($article->content)) !!}</p>

            <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3"> Back to Articles</a>
        </div>
    </div>

</div>
@endsection
