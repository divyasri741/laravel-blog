@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>

        <button type="submit">Create</button>
    </form>
@endsection