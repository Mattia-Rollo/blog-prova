<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        // dd(compact('post'));
        return view('post', compact('post'));
    }
}