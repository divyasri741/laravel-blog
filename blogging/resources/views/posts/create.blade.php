@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <br><br>
        <textarea name="content" placeholder="Content" required></textarea>
        <br><br>
        <button type="submit">Publish</button>
    </form>
@endsection

