@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Blog Posts</h2>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        @if($posts->count() > 0)
            <ul>
                @foreach($posts as $post)
                    <li style="margin-bottom: 15px;">
                        <strong>{{ $post->title }}</strong> <br>
                        <small>By {{ $post->user->name ?? 'Unknown' }} | {{ $post->created_at->format('d M Y, h:i A') }}</small>
                        <p>{{ $post->content }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No posts found.</p>
        @endif
    </div>
@endsection

