<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select(['id','name','email'])->get();
        return inertia('Index', compact('posts'));
    }
}
