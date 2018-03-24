<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function post(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);
        return view("posts/post", [
            "post" => $post,
        ]);
    }
}
