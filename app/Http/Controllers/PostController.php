<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_posts()
    {
       $posts = Post::get();
        if (count($posts) == 0){
            return response()->json([
                'success'   => true,
                'message'   => 'Sorry, there is no posts',
                'code'      => 204
            ]);
        }else{
            return response()->json([
                'success'   => true,
                'data'      => PostResource::collection($posts),
                'code'      => 200
            ]);
        }
    }

}
