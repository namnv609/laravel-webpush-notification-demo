<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view("admins/posts/index", [
            "posts" => Post::orderBy("id", "desc")->get()->load("category"),
        ]);
    }

    public function create()
    {
        return view("admins/posts/create", [
            "categories" => Category::all(),
        ]);
    }

    public function doCreate(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "content" => "required",
        ]);
        $postData = $request->except(["_token"]);
        $post = auth()->user()->posts()->create($postData);

        event(new \App\Events\NewPostAdded($post));

        return redirect("/admin/posts")->with("message", "Create success");
    }
}
