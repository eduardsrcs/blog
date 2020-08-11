<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Post;

// use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts()
    {
      $posts = Post::all();
    //   $posts_u = Post::where('id', '<>', 'null')
    //     ->orderBy('create_date', 'desc')
    //     ->take(4)
    //     ->get();
    //   $check = "Hello world";
    //   dd(compact('posts'));
      return view('posts', compact('posts'));
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }
}
