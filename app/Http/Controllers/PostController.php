<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $blogs = Post::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $blogs
        ];
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($request->all());
        return [
            "status" => 1,
            "data" => $post
        ];
    }

    public function show(Post $post)
    {
        return [
            "status" => 1,
            "data" =>$post
        ];
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->all());

        return [
            "status" => 1,
            "data" => $post,
            "msg" => "Blog updated successfully"
        ];
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return [
            "status" => 1,
            "data" => $post,
            "msg" => "Blog deleted successfully"
        ];
    }
}
