@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title">{{ $post->title }}</h1>
            <p class="text-muted">By <strong>{{ $post->user->name }}</strong> | Published on {{ $post->created_at->format('M d, Y') }}</p>
            <hr>
            <p class="card-text">{!! nl2br(e($post->content)) !!}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3"> Back to Blog</a>
        </div>
    </div>

</div>
@endsection
