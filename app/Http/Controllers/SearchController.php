<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function search()
    {
        $response = [];
        $i = 0;
        $posts = Post::select('id', 'title')->get();
        foreach($posts as $post){
            $response[$i]['id'] = $post->id;
            $response[$i]['text'] = $post->title;
            $i++;
        }
        echo (json_encode($response));
    }
}
