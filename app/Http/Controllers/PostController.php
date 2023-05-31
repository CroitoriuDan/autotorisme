<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index',[
            'posts'=>Post::latest()->filter(request(['search','kilometers','price','location','brand']))->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.layout',[
            'post'=>$post
        ]);
    }
}
