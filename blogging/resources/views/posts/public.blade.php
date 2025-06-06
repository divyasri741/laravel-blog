@extends('layouts.app')

@section('content')
    <h1>All Blog Posts (Public)</h1>

    @forelse ($posts as $post)
        <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small>By User ID: {{ $post->user_id }} | Posted on {{ $post->created_at->format('d M Y') }}</small>
        </div>
    @empty
        <p>No posts available.</p>
    @endforelse
@endsection
