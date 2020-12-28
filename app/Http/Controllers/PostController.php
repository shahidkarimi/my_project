<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('blog.show', [
            'post' => $post
        ]);
    }

    public function showCreateForm()
    {
        return view('blog.create-post');
    }

    public function store(PostRequest $request)
    {
        $post = new Post($request->validated());

        $post->save();

        return redirect('/blog');
    }
}
