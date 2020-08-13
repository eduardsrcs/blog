<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

use function PHPSTORM_META\type;

// use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts()
    {
      $posts = Post::all();
      return view('posts', compact('posts'));
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }

    public function storePost(Request $request)
    {
        date_default_timezone_set('Europe/Riga');
        $t = date("Y-m-d H:i:s", time());
        $post = new Post;
        $post->title = $request->post('pname');
        $post->title_desc = $request->post('psdedc');
        $post->created_at = $t;
        $post->updated_at = $t;
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
