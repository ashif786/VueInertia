<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;


class PostController extends Controller
{
    public function index()
    {
        //sleep(3);
        $posts = Post::select(['id','name','email'])->get();
        return inertia('Index', 
        ['posts' => $posts] 
        //compact('posts')
        );
    }

    public function create()
    {
        return inertia('Create');
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('posts')
        ->with('message', 'Post Created...');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts')
        ->with('message', 'Post Deleted...');
    }
    public function test()
    {
        dd(123);
    }
}
