<!-- resources/views/posts/public.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>All Blog Posts</title>
</head>
<body>
    <h1>All Blog Posts</h1>

    @foreach($posts as $post)
        <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p><strong>Author ID:</strong> {{ $post->user_id }}</p>
        </div>
    @endforeach

</body>
</html>
