@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>
    @foreach ($posts as $post)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <small>Posted by: {{ $post->user->name }}</small>
        </div>
    @endforeach
@endsection
