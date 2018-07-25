<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    public function index()
    {        
        $posts = Post::paginate(20);
        return view('posts.index',compact(['posts']));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return response()->json($post);
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return response()->json(null, 204);
    }
}