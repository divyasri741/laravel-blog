@extends('layouts.app')

@section('content')
<div class="container">
    <h2>You're logged in!</h2>

    <h3>Your Blog Posts</h3>

    @if ($posts->isEmpty())
        <p>You have no posts yet.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li><strong>{{ $post->title }}</strong><br>{{ $post->content }}</li>
            @endforeach
        </ul>
    @endif

    <hr>

    <h3>Create a New Blog Post</h3>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" required>
        </div>
        <br>
        <div>
            <label>Content:</label><br>
            <textarea name="content" rows="5" required></textarea>
        </div>
        <br>
        <button type="submit">Create Post</button>
    </form>
</div>
@endsection
