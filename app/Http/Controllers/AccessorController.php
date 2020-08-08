<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AccessorController extends Controller
{
   public function index(Request $request)
    {
        // get the post-id from request params
        $post_id = $request->get("id", 53);
         
        // load the requested post
        $post = Post::find($post_id);
         
        // check the name property
        return $post->name."  id=".$post_id;
    }
}
