<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

// use function PHPSTORM_META\type;

class PostsController extends Controller
{
    public function posts()
    {
      $posts = Post::all();
      foreach($posts as $post){
        $post->ccount = count(Comment::where('post_id', $post->id)->get());
      }
      return view('posts', compact('posts'));
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $post->id)->get();
        return view('post', compact('post', 'comments'));
    }

    public function remove($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('posts');
    }

    public function updateForm($id)
    {
        $post = Post::findOrFail($id);
        return view('updateform', compact('post'));
    }

    public function updatePost(Request $request)
    {   
        $post = Post::findOrFail($request->post('id'));
        $post->title = $request->post('pname');
        $post->title_desc = $request->post('psdedc');
        $post->rating = 0;
        $post->content = $request->post('pcontent');
        if ($request->file('image') !== null){
            $path = $request->file('image')->store('uploads', 'public');
            $post->pic = $path;
        } else {
            $path = null;
        }
        
        $post->save();
        return redirect('posts');
    }

    public function storePost(Request $request)
    {
        date_default_timezone_set('Europe/Riga');
        $t = date("Y-m-d H:i:s", time());
        $post = new Post;
        $post->title = $request->post('pname');
        $post->title_desc = $request->post('psdedc');
        $post->rating = 0;
        $post->content = $request->post('pcontent');
        if ($request->file('image') !== null){
            $path = $request->file('image')->store('uploads', 'public');
        } else {
            $path = null;
        }
        $post->pic = $path;
        
        $post->save();
        return redirect('posts');
    }
}
