@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dashboard</h2>
        <p>You're logged in as {{ Auth::user()->name }}!</p>

        <div style="margin-top: 20px;">
            <a href="{{ route('posts.create') }}" style="margin-right: 10px;">➕ Create Post</a>
            <a href="{{ route('posts.index') }}">📄 View All Posts</a>
        </div>

        
        <div style="margin-top: 30px;">
            <h3>Create a New Blog Post</h3>

            @if(session('success'))
                <div style="color: green;">{{ session('success') }}</div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div style="margin-bottom: 10px;">
                    <label for="title">Title:</label><br>
                    <input type="text" name="title" required style="width: 100%;">
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="content">Content:</label><br>
                    <textarea name="content" rows="4" required style="width: 100%;"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection


