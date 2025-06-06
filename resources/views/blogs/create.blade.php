@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 40px auto; padding: 20px; background: #f9f9f9; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <h2 style="text-align: center;">Create a New Blog Post</h2>

    @if(session('success'))
        <div style="color: green; text-align: center;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="title" style="display: block; font-weight: bold;">Title:</label>
            <input type="text" id="title" name="title" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="content" style="display: block; font-weight: bold;">Content:</label>
            <textarea id="content" name="content" rows="5" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
        </div>

        <div style="text-align: center;">
            <button type="submit" style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Create Post
            </button>
        </div>
    </form>
</div>
@endsection
