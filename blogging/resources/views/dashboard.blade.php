@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dashboard</h2>
        <p>You're logged in as {{ Auth::user()->name }}!</p>

        <div style="margin-top: 20px;">
            <a href="{{ route('posts.create') }}" style="margin-right: 10px;">➕ Create Post</a>
            <a href="{{ route('posts.index') }}">📄 View All Posts</a>
        </div>
    </div>
@endsection

