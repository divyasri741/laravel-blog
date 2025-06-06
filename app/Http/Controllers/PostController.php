<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Display user's own posts
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->latest()->get();
        return view('posts.index', compact('posts'));
    }

    // Show create form
    public function create()
    {
        return view('posts.create');
    }

    // Store new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    
    public function publicIndex()
    {
        $posts = Post::latest()->with('user')->get();
        return view('posts.public', compact('posts'));
    }
}
