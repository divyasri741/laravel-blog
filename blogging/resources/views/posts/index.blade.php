@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>

    @if ($posts->isEmpty())
        <p>No posts yet.</p>
    @endif

    @foreach ($posts as $post)
        <div style="margin-bottom: 20px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small>By {{ $post->user->name }}</small>
        </div>
    @endforeach
@endsection
