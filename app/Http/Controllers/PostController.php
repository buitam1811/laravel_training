<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index', [
            'posts' => Post::get()
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $formDatas = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create($formDatas);

        return redirect('/posts/index')->with('message', 'Post Created!');
    }
    
    public function edit(Post $post) {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post) {
        $formDatas = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($formDatas);

        return redirect('/posts/index')->with('message', 'Post ' . $post->id . ' Edited!');
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments
        ]);
    }
}