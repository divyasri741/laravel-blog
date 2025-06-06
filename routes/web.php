<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController; 
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Public blog listing (Step 1)
Route::get('/blog', [PostController::class, 'publicIndex'])->name('blog.index');

// Dashboard route (show user's blog posts)
Route::get('/dashboard', function () {
    $posts = Post::where('user_id', auth()->id())->latest()->get();
    return view('dashboard', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Post routes
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});

require __DIR__.'/auth.php';
